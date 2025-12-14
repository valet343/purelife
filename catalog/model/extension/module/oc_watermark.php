<?php
class ImageWatermark {
    private $file;
    private $image;
    private $width;
    private $height;
    private $bits;
    private $mime;

    public function __construct($file) {
        if (file_exists($file)) {
            $this->file = $file;

            $info = getimagesize($file);

            $this->width  = $info[0];
            $this->height = $info[1];
            $this->bits = isset($info['bits']) ? $info['bits'] : '';
            $this->mime = isset($info['mime']) ? $info['mime'] : '';

            if ($this->mime == 'image/gif') {
                $this->image = imagecreatefromgif($file);
            } elseif ($this->mime == 'image/png') {
                $this->image = imagecreatefrompng($file);
            } elseif ($this->mime == 'image/jpeg') {
                $this->image = imagecreatefromjpeg($file);
            }
        } else {
            exit('Error: Could not load image ' . $file . '!');
        }
    }

    public function save($file, $quality = 90) {
        $info = pathinfo($file);

        $extension = strtolower($info['extension']);

        if (is_resource($this->image)) {
            if ($extension == 'jpeg' || $extension == 'jpg') {
                imagejpeg($this->image, $file, $quality);
            } elseif ($extension == 'png') {
                imagepng($this->image, $file);
            } elseif ($extension == 'gif') {
                imagegif($this->image, $file);
            }

            imagedestroy($this->image);
        }
    }
	
	public function saveWebp($file, $quality = 90) {
		if (is_resource($this->image)) {
			imagewebp($this->image, $file, $quality);
			imagedestroy($this->image);
		}
	}

    public function resize($width = 0, $height = 0) {
        if (!$this->width || !$this->height) return;

        $xpos = 0;
        $ypos = 0;
        $scale = 1;

        $scale_w = $width / $this->width;
        $scale_h = $height / $this->height;

        $scale = min($scale_w, $scale_h);

        if ($scale == 1 && $scale_h == $scale_w && $this->mime != 'image/png') {
            return;
        }

        $width_new = (int)($this->width * $scale);
        $height_new = (int)($this->height * $scale);
        $xpos = (int)(($width - $width_new) / 2);
        $ypos = (int)(($height - $height_new) / 2);

        $image_old = $this->image;
        $this->image = imagecreatetruecolor($width, $height);

        if ($this->mime == 'image/png') {
            imagealphablending($this->image, false);
            imagesavealpha($this->image, true);
            $background = imagecolorallocatealpha($this->image, 255, 255, 255, 127);
            imagecolortransparent($this->image, $background);
        } else {
            $background = imagecolorallocate($this->image, 255, 255, 255);
        }

        imagefilledrectangle($this->image, 0, 0, $width, $height, $background);

        imagecopyresampled($this->image, $image_old, $xpos, $ypos, 0, 0, $width_new, $height_new, $this->width, $this->height);
        imagedestroy($image_old);

        $this->width = $width;
        $this->height = $height;
    }

    public function watermark($setting) {
        $file = DIR_IMAGE . $setting['image'];

        $info = getimagesize($file);

        $width  = $info[0];
        $height = $info[1];
        $bits = isset($info['bits']) ? $info['bits'] : '';
        $mime = isset($info['mime']) ? $info['mime'] : '';

        if ($mime == 'image/gif') {
            $watermark = imagecreatefromgif($file);
        } elseif ($mime == 'image/png') {
            $watermark = imagecreatefrompng($file);
        } elseif ($mime == 'image/jpeg') {
            $watermark = imagecreatefromjpeg($file);
        }

		$proportion = $height / $width;
		
		$width_new = $this->width * ($setting['zoom'] / 100);
		$height_new = $proportion * $width_new;

		$image_old = $watermark;
		$watermark = imagecreatetruecolor($width_new, $height_new);

		if ($mime == 'image/png') {
			imagealphablending($watermark, false);
			imagesavealpha($watermark, true);
			$background = imagecolorallocatealpha($watermark, 255, 255, 255, 0);
			imagecolortransparent($watermark, $background);
		} else {
			$background = imagecolorallocate($this->image, 255, 255, 255);
		}

		imagefilledrectangle($watermark, 0, 0, $width, $height, $background);
		imagecopyresampled($watermark, $image_old, 0, 0, 0, 0, $width_new, $height_new, $width, $height);
		imagedestroy($image_old);
		
		$width = $width_new;
		$height = $height_new;
		
		switch($setting['position']) {
			case 0:
				$pos_x = 0;
				$pos_y = 0;
				break;
			case 1:
				$pos_x = $this->width - $width;
				$pos_y = 0;
				break;
			case 2:
				$pos_x = 0;
				$pos_y = $this->height - $height;
				break;
			case 3:
				$pos_x = $this->width - $width;
				$pos_y = $this->height - $height;
				break;
			case 4:
				$pos_x = $this->width / 2 - $width / 2;
				$pos_y = $this->height / 2 - $height / 2;
				break;
			case 5:
				$pos_x = $this->width / 2 - $width / 2;
				$pos_y = 0;
				break;
			case 6:
				$pos_x = $this->width / 2 - $width / 2;
				$pos_y = $this->height - $height;
				break;
		}

        $opacity = $setting['opacity'] * 127;

        $this->imagecopymergealpha($this->image, $watermark, $pos_x, $pos_y, $width, $height, $opacity);

        imagedestroy($watermark);
    }

    public function imagecopymergealpha($image, $watermark, $pos_x, $pos_y, $width, $height, $pct) {
        $pos_x = (int)$pos_x;
        $pos_y = (int)$pos_y;
        $width = (int)$width;
        $height = (int)$height;
        $pct = (int)$pct;
		$image_width = imageSX($image);
        $image_height = imageSY($image);

        for ($y = 0; $y < $height; $y++) {

            for ($x = 0; $x < $width; $x++) {

                if ($x + $pos_x >= 0 && $x + $pos_x < $image_width && $x >= 0 && $x < $width && $y + $pos_y >= 0 && $y + $pos_y < $image_height && $y >= 0 && $y < $height) {

                    $image_pixel = imageColorsForIndex($image, imageColorat($image, $x + $pos_x, $y + $pos_y));
                    $watermark_colorat = imageColorat($watermark, $x, $y);
                    
                    if ($watermark_colorat >= 0) {
                    
                        $watermark_pixel = imageColorsForIndex($watermark, $watermark_colorat);
    
                        $watermark_alpha = 1 - ($watermark_pixel['alpha'] / 127);
                        $image_alpha = 1 - ($image_pixel['alpha'] / 127);
                        $opacity = $watermark_alpha * $pct / 100;
    
                        if ($image_alpha >= $opacity) $alpha = $image_alpha;
    
                        if ($image_alpha < $opacity) $alpha = $opacity;

                        if ($alpha > 1) $alpha = 1;
    
                        if ($opacity > 0) {
                            
                            $image_red = round((($image_pixel['red'] * $image_alpha * (1 - $opacity))));
                            $image_green = round((($image_pixel['green'] * $image_alpha * (1 - $opacity))));
                            $image_blue = round((($image_pixel['blue'] * $image_alpha * (1 - $opacity))));
							
                            $watermark_red = round((($watermark_pixel['red'] * $opacity)));
                            $watermark_green = round((($watermark_pixel['green'] * $opacity)));
                            $watermark_blue = round((($watermark_pixel['blue'] * $opacity)));
							
                            $red = round(($image_red + $watermark_red  ) / ($image_alpha * (1 - $opacity) + $opacity));
                            $green = round(($image_green + $watermark_green) / ($image_alpha * (1 - $opacity) + $opacity));
                            $blue = round(($image_blue + $watermark_blue ) / ($image_alpha * (1 - $opacity) + $opacity));
    
                            if ($red > 255) $red = 255;
							if ($red < 0) $red = 0;
    
                            if ($green > 255) $green = 255;
							if ($green < 0) $green = 0;
    
                            if ($blue > 255) $blue = 255;
							if ($blue < 0) $blue = 0;
    
                            $alpha = round((1 - $alpha) * 127);
                            $color = imageColorAllocateAlpha($image, $red, $green, $blue, $alpha);
                            imageSetPixel($image, $x + $pos_x, $y + $pos_y, $color);
                        }
                    }
                }
            }
        }
    }
}

class ModelExtensionModuleOCWatermark extends Model {
	public function resize($view, $filename, $width, $height) {

        if (!is_file(DIR_IMAGE . $filename) || substr(str_replace('\\', '/', realpath(DIR_IMAGE . $filename)), 0, strlen(DIR_IMAGE)) != str_replace('\\', '/', DIR_IMAGE)) {
			return;
		}

		$path_parts = pathinfo($filename);
		$image_old = $filename;

		if ($this->config->get('config_watermark_status')) {
			$image_new = 'cache/' . md5($path_parts['dirname']) . '-' . $path_parts['filename'] . '-' . (int)$width . 'x' . (int)$height . '.';
			
			if ($this->config->get('config_watermark_webp_' . $view) && $this->supportBrowserWebp()) {
				$image_new .= 'webp'; 
			} else {
				$image_new .= $path_parts['extension'];
			}

			//dc_svg_support
			if('svg' == $path_parts['extension']) {
		        if ($this->request->server['HTTPS']) {
		            return HTTPS_SERVER . 'image/' . $filename;
		        }
			}
			//
			
			if (!is_file(DIR_IMAGE . $image_new) || (filectime(DIR_IMAGE . $image_old) > filectime(DIR_IMAGE . $image_new))) {
				list($width_orig, $height_orig, $image_type) = getimagesize(DIR_IMAGE . $image_old);
				 
				if (!in_array($image_type, array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF))) { 
					return DIR_IMAGE . $image_old;
				}
				
				$path = '';

                $directories = explode('/', dirname($image_new));

                foreach ($directories as $directory) {
                    $path = $path . '/' . $directory;

                    if (!is_dir(DIR_IMAGE . $path)) {
                        @mkdir(DIR_IMAGE . $path, 0777);
                    }
                }

                $image = new ImageWatermark(DIR_IMAGE . $image_old);
                $image->resize($width, $height);
				
				if ($this->config->get('config_watermark_watermark_' . $view)) {
					$setting = array(
						'image'    => $this->config->get('config_watermark_image'),
						'opacity'  => $this->config->get('config_watermark_opacity'),
						'position' => $this->config->get('config_watermark_position'),
						'zoom' 	   => $this->config->get('config_watermark_zoom')
					);
					
					$image->watermark($setting);
				}
				
				if ($this->config->get('config_watermark_webp_' . $view) && $this->supportBrowserWebp()) {
					$image->saveWebp(DIR_IMAGE . $image_new);
				} else {
					$image->save(DIR_IMAGE . $image_new);
				}
            }
		} else {
			$image_new = 'cache/' . utf8_substr($filename, 0, utf8_strrpos($filename, '.')) . '-' . (int)$width . 'x' . (int)$height . '.' . $path_parts['extension'];
			
			if (!is_file(DIR_IMAGE . $image_new) || (filemtime(DIR_IMAGE . $image_old) > filemtime(DIR_IMAGE . $image_new))) {
				list($width_orig, $height_orig, $image_type) = getimagesize(DIR_IMAGE . $image_old);
					 
				if (!in_array($image_type, array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF))) { 
					return DIR_IMAGE . $image_old;
				}
							
				$path = '';

				$directories = explode('/', dirname($image_new));

				foreach ($directories as $directory) {
					$path = $path . '/' . $directory;

					if (!is_dir(DIR_IMAGE . $path)) {
						@mkdir(DIR_IMAGE . $path, 0777);
					}
				}

				if ($width_orig != $width || $height_orig != $height) {
					$image = new Image(DIR_IMAGE . $image_old);
					$image->resize($width, $height);
					$image->save(DIR_IMAGE . $image_new);
				} else {
					copy(DIR_IMAGE . $image_old, DIR_IMAGE . $image_new);
				}
			}
		}
		
		$image_new = str_replace(' ', '%20', $image_new);  // fix bug when attach image on email (gmail.com). it is automatic changing space " " to +
		
		if ($this->request->server['HTTPS']) {
			return $this->config->get('config_ssl') . 'image/' . $image_new;
		} else {
			return $this->config->get('config_url') . 'image/' . $image_new;
		}
    }
	
	private function supportBrowserWebp() {
		if (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false || strpos($_SERVER['HTTP_USER_AGENT'], ' Chrome/') !== false) {
		   return true;
		} else {
			return false;
		}
	}
}