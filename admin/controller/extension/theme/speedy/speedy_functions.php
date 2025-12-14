<?php
$data['user_token'] = $this->session->data['user_token'];

if (isset($this->request->post['theme_speedy_product_limit'])) {
        $data['theme_speedy_product_limit'] = $this->request->post['theme_speedy_product_limit'];
} elseif (isset($setting_info['theme_speedy_product_limit'])) {
        $data['theme_speedy_product_limit'] = $setting_info['theme_speedy_product_limit'];
} else {
        $data['theme_speedy_product_limit'] = 15;
}

if (isset($this->request->post['theme_speedy_status'])) {
        $data['theme_speedy_status'] = $this->request->post['theme_speedy_status'];
} elseif (isset($setting_info['theme_speedy_status'])) {
        $data['theme_speedy_status'] = $setting_info['theme_speedy_status'];
} else {
        $data['theme_speedy_status'] = '';
}

if (isset($this->request->post['theme_speedy_product_description_length'])) {
        $data['theme_speedy_product_description_length'] = $this->request->post['theme_speedy_product_description_length'];
} elseif (isset($setting_info['theme_speedy_product_description_length'])) {
        $data['theme_speedy_product_description_length'] = $setting_info['theme_speedy_product_description_length'];
} else {
        $data['theme_speedy_product_description_length'] = 100;
}

if (isset($this->request->post['theme_speedy_image_category_width'])) {
        $data['theme_speedy_image_category_width'] = $this->request->post['theme_speedy_image_category_width'];
} elseif (isset($setting_info['theme_speedy_image_category_width'])) {
        $data['theme_speedy_image_category_width'] = $setting_info['theme_speedy_image_category_width'];
} else {
        $data['theme_speedy_image_category_width'] = 80;                
}

if (isset($this->request->post['theme_speedy_image_category_height'])) {
        $data['theme_speedy_image_category_height'] = $this->request->post['theme_speedy_image_category_height'];
} elseif (isset($setting_info['theme_speedy_image_category_height'])) {
        $data['theme_speedy_image_category_height'] = $setting_info['theme_speedy_image_category_height'];
} else {
        $data['theme_speedy_image_category_height'] = 80;
}

if (isset($this->request->post['theme_speedy_image_manufacturer_width'])) {
        $data['theme_speedy_image_manufacturer_width'] = $this->request->post['theme_speedy_image_manufacturer_width'];
} elseif (isset($setting_info['theme_speedy_image_manufacturer_width'])) {
        $data['theme_speedy_image_manufacturer_width'] = $setting_info['theme_speedy_image_manufacturer_width'];
} else {
        $data['theme_speedy_image_manufacturer_width'] = 80;            
}

if (isset($this->request->post['theme_speedy_image_manufacturer_height'])) {
        $data['theme_speedy_image_manufacturer_height'] = $this->request->post['theme_speedy_image_manufacturer_height'];
} elseif (isset($setting_info['theme_speedy_image_manufacturer_height'])) {
        $data['theme_speedy_image_manufacturer_height'] = $setting_info['theme_speedy_image_manufacturer_height'];
} else {
        $data['theme_speedy_image_manufacturer_height'] = 80;
}

if (isset($this->request->post['theme_speedy_image_thumb_width'])) {
        $data['theme_speedy_image_thumb_width'] = $this->request->post['theme_speedy_image_thumb_width'];
} elseif (isset($setting_info['theme_speedy_image_thumb_width'])) {
        $data['theme_speedy_image_thumb_width'] = $setting_info['theme_speedy_image_thumb_width'];
} else {
        $data['theme_speedy_image_thumb_width'] = 228;
}

if (isset($this->request->post['theme_speedy_image_thumb_height'])) {
        $data['theme_speedy_image_thumb_height'] = $this->request->post['theme_speedy_image_thumb_height'];
} elseif (isset($setting_info['theme_speedy_image_thumb_height'])) {
        $data['theme_speedy_image_thumb_height'] = $setting_info['theme_speedy_image_thumb_height'];
} else {
        $data['theme_speedy_image_thumb_height'] = 228;         
}

if (isset($this->request->post['theme_speedy_image_popup_width'])) {
        $data['theme_speedy_image_popup_width'] = $this->request->post['theme_speedy_image_popup_width'];
} elseif (isset($setting_info['theme_speedy_image_popup_width'])) {
        $data['theme_speedy_image_popup_width'] = $setting_info['theme_speedy_image_popup_width'];
} else {
        $data['theme_speedy_image_popup_width'] = 500;
}

if (isset($this->request->post['theme_speedy_image_popup_height'])) {
        $data['theme_speedy_image_popup_height'] = $this->request->post['theme_speedy_image_popup_height'];
} elseif (isset($setting_info['theme_speedy_image_popup_height'])) {
        $data['theme_speedy_image_popup_height'] = $setting_info['theme_speedy_image_popup_height'];
} else {
        $data['theme_speedy_image_popup_height'] = 500;
}

if (isset($this->request->post['theme_speedy_image_product_width'])) {
        $data['theme_speedy_image_product_width'] = $this->request->post['theme_speedy_image_product_width'];
} elseif (isset($setting_info['theme_speedy_image_product_width'])) {
        $data['theme_speedy_image_product_width'] = $setting_info['theme_speedy_image_product_width'];
} else {
        $data['theme_speedy_image_product_width'] = 228;
}

if (isset($this->request->post['theme_speedy_image_product_height'])) {
        $data['theme_speedy_image_product_height'] = $this->request->post['theme_speedy_image_product_height'];
} elseif (isset($setting_info['theme_speedy_image_product_height'])) {
        $data['theme_speedy_image_product_height'] = $setting_info['theme_speedy_image_product_height'];
} else {
        $data['theme_speedy_image_product_height'] = 228;
}

if (isset($this->request->post['theme_speedy_image_additional_width'])) {
        $data['theme_speedy_image_additional_width'] = $this->request->post['theme_speedy_image_additional_width'];
} elseif (isset($setting_info['theme_speedy_image_additional_width'])) {
        $data['theme_speedy_image_additional_width'] = $setting_info['theme_speedy_image_additional_width'];
} else {
        $data['theme_speedy_image_additional_width'] = 74;
}

if (isset($this->request->post['theme_speedy_image_additional_height'])) {
        $data['theme_speedy_image_additional_height'] = $this->request->post['theme_speedy_image_additional_height'];
} elseif (isset($setting_info['theme_speedy_image_additional_height'])) {
        $data['theme_speedy_image_additional_height'] = $setting_info['theme_speedy_image_additional_height'];
} else {
        $data['theme_speedy_image_additional_height'] = 74;
}

if (isset($this->request->post['theme_speedy_image_related_width'])) {
        $data['theme_speedy_image_related_width'] = $this->request->post['theme_speedy_image_related_width'];
} elseif (isset($setting_info['theme_speedy_image_related_width'])) {
        $data['theme_speedy_image_related_width'] = $setting_info['theme_speedy_image_related_width'];
} else {
        $data['theme_speedy_image_related_width'] = 80;
}

if (isset($this->request->post['theme_speedy_image_related_height'])) {
        $data['theme_speedy_image_related_height'] = $this->request->post['theme_speedy_image_related_height'];
} elseif (isset($setting_info['theme_speedy_image_related_height'])) {
        $data['theme_speedy_image_related_height'] = $setting_info['theme_speedy_image_related_height'];
} else {
        $data['theme_speedy_image_related_height'] = 80;
}

if (isset($this->request->post['theme_speedy_image_compare_width'])) {
        $data['theme_speedy_image_compare_width'] = $this->request->post['theme_speedy_image_compare_width'];
} elseif (isset($setting_info['theme_speedy_image_compare_width'])) {
        $data['theme_speedy_image_compare_width'] = $setting_info['theme_speedy_image_compare_width'];
} else {
        $data['theme_speedy_image_compare_width'] = 90;
}

if (isset($this->request->post['theme_speedy_image_compare_height'])) {
        $data['theme_speedy_image_compare_height'] = $this->request->post['theme_speedy_image_compare_height'];
} elseif (isset($setting_info['theme_speedy_image_compare_height'])) {
        $data['theme_speedy_image_compare_height'] = $setting_info['theme_speedy_image_compare_height'];
} else {
        $data['theme_speedy_image_compare_height'] = 90;
}

if (isset($this->request->post['theme_speedy_image_wishlist_width'])) {
        $data['theme_speedy_image_wishlist_width'] = $this->request->post['theme_speedy_image_wishlist_width'];
} elseif (isset($setting_info['theme_speedy_image_wishlist_width'])) {
        $data['theme_speedy_image_wishlist_width'] = $setting_info['theme_speedy_image_wishlist_width'];
} else {
        $data['theme_speedy_image_wishlist_width'] = 47;
}

if (isset($this->request->post['theme_speedy_image_wishlist_height'])) {
        $data['theme_speedy_image_wishlist_height'] = $this->request->post['theme_speedy_image_wishlist_height'];
} elseif (isset($setting_info['theme_speedy_image_wishlist_height'])) {
        $data['theme_speedy_image_wishlist_height'] = $setting_info['theme_speedy_image_wishlist_height'];
} else {
        $data['theme_speedy_image_wishlist_height'] = 47;
}

if (isset($this->request->post['theme_speedy_image_cart_width'])) {
        $data['theme_speedy_image_cart_width'] = $this->request->post['theme_speedy_image_cart_width'];
} elseif (isset($setting_info['theme_speedy_image_cart_width'])) {
        $data['theme_speedy_image_cart_width'] = $setting_info['theme_speedy_image_cart_width'];
} else {
        $data['theme_speedy_image_cart_width'] = 47;
}

if (isset($this->request->post['theme_speedy_image_cart_height'])) {
        $data['theme_speedy_image_cart_height'] = $this->request->post['theme_speedy_image_cart_height'];
} elseif (isset($setting_info['theme_speedy_image_cart_height'])) {
        $data['theme_speedy_image_cart_height'] = $setting_info['theme_speedy_image_cart_height'];
} else {
        $data['theme_speedy_image_cart_height'] = 47;
}

if (isset($this->request->post['theme_speedy_image_location_width'])) {
        $data['theme_speedy_image_location_width'] = $this->request->post['theme_speedy_image_location_width'];
} elseif (isset($setting_info['theme_speedy_image_location_width'])) {
        $data['theme_speedy_image_location_width'] = $setting_info['theme_speedy_image_location_width'];
} else {
        $data['theme_speedy_image_location_width'] = 268;
}

if (isset($this->request->post['theme_speedy_image_location_height'])) {
        $data['theme_speedy_image_location_height'] = $this->request->post['theme_speedy_image_location_height'];
} elseif (isset($setting_info['theme_speedy_image_location_height'])) {
        $data['theme_speedy_image_location_height'] = $setting_info['theme_speedy_image_location_height'];
} else {
        $data['theme_speedy_image_location_height'] = 50;
}

// dc_pro_theme

        // tab-main

        if (isset($this->request->post['theme_speedy_scheme_color'])) {
                $data['theme_speedy_scheme_color'] = $this->request->post['theme_speedy_scheme_color'];
        } elseif (isset($setting_info['theme_speedy_scheme_color'])) {
                $data['theme_speedy_scheme_color'] = $setting_info['theme_speedy_scheme_color'];
        } else {
                $data['theme_speedy_scheme_color'] = 1;
        }

        if (isset($this->request->post['theme_speedy_scheme_color_edit'])) {
                $data['theme_speedy_scheme_color_edit'] = $this->request->post['theme_speedy_scheme_color_edit'];
        } elseif (isset($setting_info['theme_speedy_scheme_color_edit'])) {
                $data['theme_speedy_scheme_color_edit'] = $setting_info['theme_speedy_scheme_color_edit'];
        } else {
                $data['theme_speedy_scheme_color_edit'] = 0;
        }

        if (isset($this->request->post['theme_speedy_main_color_type'])) {
                $data['theme_speedy_main_color_type'] = $this->request->post['theme_speedy_main_color_type'];
        } elseif (isset($setting_info['theme_speedy_main_color_type'])) {
                $data['theme_speedy_main_color_type'] = $setting_info['theme_speedy_main_color_type'];
        } else {
                $data['theme_speedy_main_color_type'] = 1;
        }

        if (isset($this->request->post['theme_speedy_main_color'])) {
                $data['theme_speedy_main_color'] = $this->request->post['theme_speedy_main_color'];
        } elseif (isset($setting_info['theme_speedy_main_color'])) {
                $data['theme_speedy_main_color'] = $setting_info['theme_speedy_main_color'];
        } else {
                $data['theme_speedy_main_color'] = '#358ab2';
        }

        if (isset($this->request->post['theme_speedy_main_color_2'])) {
                $data['theme_speedy_main_color_2'] = $this->request->post['theme_speedy_main_color_2'];
        } elseif (isset($setting_info['theme_speedy_main_color_2'])) {
                $data['theme_speedy_main_color_2'] = $setting_info['theme_speedy_main_color_2'];
        } else {
                $data['theme_speedy_main_color_2'] = '#158ab2';
        }

        if (isset($this->request->post['theme_speedy_main_color_3'])) {
                $data['theme_speedy_main_color_3'] = $this->request->post['theme_speedy_main_color_3'];
        } elseif (isset($setting_info['theme_speedy_main_color_3'])) {
                $data['theme_speedy_main_color_3'] = $setting_info['theme_speedy_main_color_3'];
        } else {
                $data['theme_speedy_main_color_3'] = '#758ab2';
        }

        if (isset($this->request->post['theme_speedy_header_color'])) {
                $data['theme_speedy_header_color'] = $this->request->post['theme_speedy_header_color'];
        } elseif (isset($setting_info['theme_speedy_header_color'])) {
                $data['theme_speedy_header_color'] = $setting_info['theme_speedy_header_color'];
        } else {
                $data['theme_speedy_header_color'] = '#ffffff';
        }

        if (isset($this->request->post['theme_speedy_special_color'])) {
                $data['theme_speedy_special_color'] = $this->request->post['theme_speedy_special_color'];
        } elseif (isset($setting_info['theme_speedy_special_color'])) {
                $data['theme_speedy_special_color'] = $setting_info['theme_speedy_special_color'];
        } else {
                $data['theme_speedy_special_color'] = '#f28400';
        }

        if (isset($this->request->post['theme_speedy_background_color'])) {
                $data['theme_speedy_background_color'] = $this->request->post['theme_speedy_background_color'];
        } elseif (isset($setting_info['theme_speedy_background_color'])) {
                $data['theme_speedy_background_color'] = $setting_info['theme_speedy_background_color'];
        } else {
                $data['theme_speedy_background_color'] = '#f7f8f9';
        }

        if (isset($this->request->post['theme_speedy_background_top_color'])) {
                $data['theme_speedy_background_top_color'] = $this->request->post['theme_speedy_background_top_color'];
        } elseif (isset($setting_info['theme_speedy_background_top_color'])) {
                $data['theme_speedy_background_top_color'] = $setting_info['theme_speedy_background_top_color'];
        } else {
                $data['theme_speedy_background_top_color'] = '#f8f9fa';
        }

        if (isset($this->request->post['theme_speedy_background_footer_color'])) {
                $data['theme_speedy_background_footer_color'] = $this->request->post['theme_speedy_background_footer_color'];
        } elseif (isset($setting_info['theme_speedy_background_footer_color'])) {
                $data['theme_speedy_background_footer_color'] = $setting_info['theme_speedy_background_footer_color'];
        } else {
                $data['theme_speedy_background_footer_color'] = '#081e2e';
        }

        if (isset($this->request->post['theme_speedy_background_payments_color'])) {
                $data['theme_speedy_background_payments_color'] = $this->request->post['theme_speedy_background_payments_color'];
        } elseif (isset($setting_info['theme_speedy_background_payments_color'])) {
                $data['theme_speedy_background_payments_color'] = $setting_info['theme_speedy_background_payments_color'];
        } else {
                $data['theme_speedy_background_payments_color'] = '#07141f';
        }

        if (isset($this->request->post['theme_speedy_font_family'])) {
                $data['theme_speedy_font_family'] = $this->request->post['theme_speedy_font_family'];
        } elseif (isset($setting_info['theme_speedy_font_family'])) {
                $data['theme_speedy_font_family'] = $setting_info['theme_speedy_font_family'];
        } else {
                $data['theme_speedy_font_family'] = 0;
        }

        if (isset($this->request->post['theme_speedy_font_size'])) {
                $data['theme_speedy_font_size'] = $this->request->post['theme_speedy_font_size'];
        } elseif (isset($setting_info['theme_speedy_font_size'])) {
                $data['theme_speedy_font_size'] = $setting_info['theme_speedy_font_size'];
        } else {
                $data['theme_speedy_font_size'] = '14';
        }

        // tab-header

        if (isset($this->request->post['theme_speedy_header_currency'])) {
                $data['theme_speedy_header_currency'] = $this->request->post['theme_speedy_header_currency'];
        } elseif (isset($setting_info['theme_speedy_header_currency'])) {
                $data['theme_speedy_header_currency'] = $setting_info['theme_speedy_header_currency'];
        } else {
                $data['theme_speedy_header_currency'] = 1;
        }

        if (isset($this->request->post['theme_speedy_header_language'])) {
                $data['theme_speedy_header_language'] = $this->request->post['theme_speedy_header_language'];
        } elseif (isset($setting_info['theme_speedy_header_language'])) {
                $data['theme_speedy_header_language'] = $setting_info['theme_speedy_header_language'];
        } else {
                $data['theme_speedy_header_language'] = 1;
        }

        if (isset($this->request->post['theme_speedy_header_compare'])) {
                $data['theme_speedy_header_compare'] = $this->request->post['theme_speedy_header_compare'];
        } elseif (isset($setting_info['theme_speedy_header_compare'])) {
                $data['theme_speedy_header_compare'] = $setting_info['theme_speedy_header_compare'];
        } else {
                $data['theme_speedy_header_compare'] = 1;
        }

        if (isset($this->request->post['theme_speedy_header_wishlist'])) {
                $data['theme_speedy_header_wishlist'] = $this->request->post['theme_speedy_header_wishlist'];
        } elseif (isset($setting_info['theme_speedy_header_wishlist'])) {
                $data['theme_speedy_header_wishlist'] = $setting_info['theme_speedy_header_wishlist'];
        } else {
                $data['theme_speedy_header_wishlist'] = 1;
        }

        if (isset($this->request->post['theme_speedy_header_account'])) {
                $data['theme_speedy_header_account'] = $this->request->post['theme_speedy_header_account'];
        } elseif (isset($setting_info['theme_speedy_header_account'])) {
                $data['theme_speedy_header_account'] = $setting_info['theme_speedy_header_account'];
        } else {
                $data['theme_speedy_header_account'] = 1;
        }

        if (isset($this->request->post['theme_speedy_header_menu_links'])) {
                $data['theme_speedy_header_menu_links'] = $this->request->post['theme_speedy_header_menu_links'];
        } elseif (!empty($setting_info)) {
                $theme_speedy_header_menu_links = $setting_info['theme_speedy_header_menu_link'];
        } else {
                $data['theme_speedy_header_menu_links'] = array();
        }

        $data['theme_speedy_header_menu_links'] = array();

        foreach ($theme_speedy_header_menu_links as $key => $value) {
                foreach ($value as $theme_speedy_header_menu_link) {
                        $data['theme_speedy_header_menu_links'][$key][] = array(
                                'title'      => $theme_speedy_header_menu_link['title'],
                                'link'       => $theme_speedy_header_menu_link['link']
                        );
                }
        }

        if (isset($this->request->post['theme_speedy_header_phones'])) {
                $data['theme_speedy_header_phones'] = $this->request->post['theme_speedy_header_phones'];
        } elseif (isset($setting_info['theme_speedy_header_phones'])) {
                $data['theme_speedy_header_phones'] = $setting_info['theme_speedy_header_phones'];
        } else {
                $data['theme_speedy_header_phones'] = 1;
        }

        if (isset($this->request->post['theme_speedy_header_messengers'])) {
                $data['theme_speedy_header_messengers'] = $this->request->post['theme_speedy_header_messengers'];
        } elseif (isset($setting_info['theme_speedy_header_messengers'])) {
                $data['theme_speedy_header_messengers'] = $setting_info['theme_speedy_header_messengers'];
        } else {
                $data['theme_speedy_header_messengers'] = 1;
        }

        if (isset($this->request->post['theme_speedy_header_email'])) {
                $data['theme_speedy_header_email'] = $this->request->post['theme_speedy_header_email'];
        } elseif (isset($setting_info['theme_speedy_header_email'])) {
                $data['theme_speedy_header_email'] = $setting_info['theme_speedy_header_email'];
        } else {
                $data['theme_speedy_header_email'] = 1;
        }

        if (isset($this->request->post['theme_speedy_header_open'])) {
                $data['theme_speedy_header_open'] = $this->request->post['theme_speedy_header_open'];
        } elseif (isset($setting_info['theme_speedy_header_open'])) {
                $data['theme_speedy_header_open'] = $setting_info['theme_speedy_header_open'];
        } else {
                $data['theme_speedy_header_open'] = 1;
        }

        // tab-footer

        if (isset($this->request->post['theme_speedy_footer_payments_status'])) {
                $data['theme_speedy_footer_payments_status'] = $this->request->post['theme_speedy_footer_payments_status'];
        } elseif (isset($setting_info['theme_speedy_footer_payments_status'])) {
                $data['theme_speedy_footer_payments_status'] = $setting_info['theme_speedy_footer_payments_status'];
        } else {
                $data['theme_speedy_footer_payments_status'] = 1;
        }

        if (isset($this->request->post['theme_speedy_footer_payments'])) {
                $data['theme_speedy_footer_payments'] = $this->request->post['theme_speedy_footer_payments'];
        } elseif (!empty($setting_info)) {
                $theme_speedy_footer_payments = $setting_info['theme_speedy_footer_payment'];
        } else {
                $data['theme_speedy_footer_payments'] = array();
        }

        $data['theme_speedy_footer_payments'] = array();

        foreach ($theme_speedy_footer_payments as $theme_speedy_footer_payment) {

                        $data['theme_speedy_footer_payments'][] = array(
                                'image'      => $theme_speedy_footer_payment['image'],
                                'thumb'      => $this->model_tool_image->resize($theme_speedy_footer_payment['image'], 100, 100),
                                'sort_order' => $theme_speedy_footer_payment['sort_order']
                        );
                
        }

        if (isset($this->request->post['theme_speedy_footer_menu_lenght'])) {
                $data['theme_speedy_footer_menu_lenght'] = $this->request->post['theme_speedy_footer_menu_lenght'];
        } elseif (isset($setting_info['theme_speedy_footer_menu_lenght'])) {
                $data['theme_speedy_footer_menu_lenght'] = $setting_info['theme_speedy_footer_menu_lenght'];
        } else {
                $data['theme_speedy_footer_menu_lenght'] = 10;
        }

        if (isset($this->request->post['theme_speedy_footer_phones'])) {
                $data['theme_speedy_footer_phones'] = $this->request->post['theme_speedy_footer_phones'];
        } elseif (isset($setting_info['theme_speedy_footer_phones'])) {
                $data['theme_speedy_footer_phones'] = $setting_info['theme_speedy_footer_phones'];
        } else {
                $data['theme_speedy_footer_phones'] = 1;
        }

        if (isset($this->request->post['theme_speedy_footer_messengers'])) {
                $data['theme_speedy_footer_messengers'] = $this->request->post['theme_speedy_footer_messengers'];
        } elseif (isset($setting_info['theme_speedy_footer_messengers'])) {
                $data['theme_speedy_footer_messengers'] = $setting_info['theme_speedy_footer_messengers'];
        } else {
                $data['theme_speedy_footer_messengers'] = 1;
        }

        if (isset($this->request->post['theme_speedy_footer_email'])) {
                $data['theme_speedy_footer_email'] = $this->request->post['theme_speedy_footer_email'];
        } elseif (isset($setting_info['theme_speedy_footer_email'])) {
                $data['theme_speedy_footer_email'] = $setting_info['theme_speedy_footer_email'];
        } else {
                $data['theme_speedy_footer_email'] = 1;
        }

        if (isset($this->request->post['theme_speedy_footer_socials'])) {
                $data['theme_speedy_footer_socials'] = $this->request->post['theme_speedy_footer_socials'];
        } elseif (isset($setting_info['theme_speedy_footer_socials'])) {
                $data['theme_speedy_footer_socials'] = $setting_info['theme_speedy_footer_socials'];
        } else {
                $data['theme_speedy_footer_socials'] = 1;
        }

        if (isset($this->request->post['theme_speedy_footer_address'])) {
                $data['theme_speedy_footer_address'] = $this->request->post['theme_speedy_footer_address'];
        } elseif (isset($setting_info['theme_speedy_footer_address'])) {
                $data['theme_speedy_footer_address'] = $setting_info['theme_speedy_footer_address'];
        } else {
                $data['theme_speedy_footer_address'] = 1;
        }

        if (isset($this->request->post['theme_speedy_footer_map'])) {
                $data['theme_speedy_footer_map'] = $this->request->post['theme_speedy_footer_map'];
        } elseif (isset($setting_info['theme_speedy_footer_map'])) {
                $data['theme_speedy_footer_map'] = $setting_info['theme_speedy_footer_map'];
        } else {
                $data['theme_speedy_footer_map'] = 0;
        }

        if (isset($this->request->post['theme_speedy_footer_map_code'])) {
                $data['theme_speedy_footer_map_code'] = $this->request->post['theme_speedy_footer_map_code'];
        } elseif (isset($setting_info['theme_speedy_footer_map_code'])) {
                $data['theme_speedy_footer_map_code'] = $setting_info['theme_speedy_footer_map_code'];
        } else {
                $data['theme_speedy_footer_map_code'] = '';
        }

        // tab-products

        if (isset($this->request->post['theme_speedy_products_type'])) {
                $data['theme_speedy_products_type'] = $this->request->post['theme_speedy_products_type'];
        } elseif (isset($setting_info['theme_speedy_products_type'])) {
                $data['theme_speedy_products_type'] = $setting_info['theme_speedy_products_type'];
        } else {
                $data['theme_speedy_products_type'] = 'slider';
        }

        if (isset($this->request->post['theme_speedy_products_slider_arrows'])) {
                $data['theme_speedy_products_slider_arrows'] = $this->request->post['theme_speedy_products_slider_arrows'];
        } elseif (isset($setting_info['theme_speedy_products_slider_arrows'])) {
                $data['theme_speedy_products_slider_arrows'] = $setting_info['theme_speedy_products_slider_arrows'];
        } else {
                $data['theme_speedy_products_slider_arrows'] = 1;
        }

        if (isset($this->request->post['theme_speedy_products_slider_limit'])) {
                $data['theme_speedy_products_slider_limit'] = $this->request->post['theme_speedy_products_slider_limit'];
        } elseif (isset($setting_info['theme_speedy_products_slider_limit'])) {
                $data['theme_speedy_products_slider_limit'] = $setting_info['theme_speedy_products_slider_limit'];
        } else {
                $data['theme_speedy_products_slider_limit'] = 5;
        }

        if (isset($this->request->post['theme_speedy_products_slider_limit_xl'])) {
                $data['theme_speedy_products_slider_limit_xl'] = $this->request->post['theme_speedy_products_slider_limit_xl'];
        } elseif (isset($setting_info['theme_speedy_products_slider_limit_xl'])) {
                $data['theme_speedy_products_slider_limit_xl'] = $setting_info['theme_speedy_products_slider_limit_xl'];
        } else {
                $data['theme_speedy_products_slider_limit_xl'] = 4;
        }

        if (isset($this->request->post['theme_speedy_products_slider_limit_lg'])) {
                $data['theme_speedy_products_slider_limit_lg'] = $this->request->post['theme_speedy_products_slider_limit_lg'];
        } elseif (isset($setting_info['theme_speedy_products_slider_limit_lg'])) {
                $data['theme_speedy_products_slider_limit_lg'] = $setting_info['theme_speedy_products_slider_limit_lg'];
        } else {
                $data['theme_speedy_products_slider_limit_lg'] = 3;
        }

        if (isset($this->request->post['theme_speedy_products_slider_limit_md'])) {
                $data['theme_speedy_products_slider_limit_md'] = $this->request->post['theme_speedy_products_slider_limit_md'];
        } elseif (isset($setting_info['theme_speedy_products_slider_limit_md'])) {
                $data['theme_speedy_products_slider_limit_md'] = $setting_info['theme_speedy_products_slider_limit_md'];
        } else {
                $data['theme_speedy_products_slider_limit_md'] = 3;
        }

        if (isset($this->request->post['theme_speedy_products_slider_limit_sm'])) {
                $data['theme_speedy_products_slider_limit_sm'] = $this->request->post['theme_speedy_products_slider_limit_sm'];
        } elseif (isset($setting_info['theme_speedy_products_slider_limit_sm'])) {
                $data['theme_speedy_products_slider_limit_sm'] = $setting_info['theme_speedy_products_slider_limit_sm'];
        } else {
                $data['theme_speedy_products_slider_limit_sm'] = 2;
        }

        if (isset($this->request->post['theme_speedy_products_slider_limit_xs'])) {
                $data['theme_speedy_products_slider_limit_xs'] = $this->request->post['theme_speedy_products_slider_limit_xs'];
        } elseif (isset($setting_info['theme_speedy_products_slider_limit_xs'])) {
                $data['theme_speedy_products_slider_limit_xs'] = $setting_info['theme_speedy_products_slider_limit_xs'];
        } else {
                $data['theme_speedy_products_slider_limit_xs'] = 2;
        }

        // tab-mobile-menu

        // if (isset($this->request->post['theme_speedy_m_menu_catalog_status'])) {
        //         $data['theme_speedy_m_menu_catalog_status'] = $this->request->post['theme_speedy_m_menu_catalog_status'];
        // } elseif (isset($setting_info['theme_speedy_m_menu_catalog_status'])) {
        //         $data['theme_speedy_m_menu_catalog_status'] = $setting_info['theme_speedy_m_menu_catalog_status'];
        // } else {
        //         $data['theme_speedy_m_menu_catalog_status'] = 0;
        // }

        if (isset($this->request->post['theme_speedy_m_menu_additional_links'])) {
                $data['theme_speedy_m_menu_additional_links'] = $this->request->post['theme_speedy_m_menu_additional_links'];
        } elseif (!empty($setting_info)) {
                $theme_speedy_m_menu_additional_links = $setting_info['theme_speedy_m_menu_additional_link'];
        } else {
                $data['theme_speedy_m_menu_additional_links'] = array();
        }

        $data['theme_speedy_m_menu_additional_links'] = array();

        foreach ($theme_speedy_m_menu_additional_links as $key => $value) {
                foreach ($value as $theme_speedy_m_menu_additional_link) {
                        if (is_file(DIR_IMAGE . $theme_speedy_m_menu_additional_link['image'])) {
                                $link_image = $theme_speedy_m_menu_additional_link['image'];
                                $link_thumb = $theme_speedy_m_menu_additional_link['image'];
                        } else {
                                $link_image = '';
                                $link_thumb = 'no_image.png';
                        }

                        $data['theme_speedy_m_menu_additional_links'][$key][] = array(
                                'title'      => $theme_speedy_m_menu_additional_link['title'],
                                'link'       => $theme_speedy_m_menu_additional_link['link'],
                                'image'      => $link_image,
                                'thumb'      => $this->model_tool_image->resize($link_thumb, 24, 24)
                        );
                }
        }

        // tab-push

        if (isset($this->request->post['theme_speedy_push_cart_alert_type'])) {
                $data['theme_speedy_push_cart_alert_type'] = $this->request->post['theme_speedy_push_cart_alert_type'];
        } elseif (isset($setting_info['theme_speedy_push_cart_alert_type'])) {
                $data['theme_speedy_push_cart_alert_type'] = $setting_info['theme_speedy_push_cart_alert_type'];
        } else {
                $data['theme_speedy_push_cart_alert_type'] = 'modal';
        }

        if (isset($this->request->post['theme_speedy_push_alert_type'])) {
                $data['theme_speedy_push_alert_type'] = $this->request->post['theme_speedy_push_alert_type'];
        } elseif (isset($setting_info['theme_speedy_push_alert_type'])) {
                $data['theme_speedy_push_alert_type'] = $setting_info['theme_speedy_push_alert_type'];
        } else {
                $data['theme_speedy_push_alert_type'] = 'alert';
        }

        // tab-widgets

        if (isset($this->request->post['theme_speedy_widgets_modal_cookie_status'])) {
                $data['theme_speedy_widgets_modal_cookie_status'] = $this->request->post['theme_speedy_widgets_modal_cookie_status'];
        } elseif (isset($setting_info['theme_speedy_widgets_modal_cookie_status'])) {
                $data['theme_speedy_widgets_modal_cookie_status'] = $setting_info['theme_speedy_widgets_modal_cookie_status'];
        } else {
                $data['theme_speedy_widgets_modal_cookie_status'] = 1;
        }

        if (isset($this->request->post['theme_speedy_widgets_modal_cookie_description'])) {
                $data['theme_speedy_widgets_modal_cookie_description'] = $this->request->post['theme_speedy_widgets_modal_cookie_description'];
        } elseif (isset($setting_info['theme_speedy_widgets_modal_cookie_description'])) {
                $data['theme_speedy_widgets_modal_cookie_description'] = $setting_info['theme_speedy_widgets_modal_cookie_description'];
        } else {
                $data['theme_speedy_widgets_modal_cookie_description'] = '';
        }

        if (isset($this->request->post['theme_speedy_widgets_messenger_status'])) {
                $data['theme_speedy_widgets_messenger_status'] = $this->request->post['theme_speedy_widgets_messenger_status'];
        } elseif (isset($setting_info['theme_speedy_widgets_messenger_status'])) {
                $data['theme_speedy_widgets_messenger_status'] = $setting_info['theme_speedy_widgets_messenger_status'];
        } else {
                $data['theme_speedy_widgets_messenger_status'] = 1;
        }

        if (isset($this->request->post['theme_speedy_widgets_messenger_status'])) {
                $data['theme_speedy_widgets_messenger_status'] = $this->request->post['theme_speedy_widgets_messenger_status'];
        } elseif (isset($setting_info['theme_speedy_widgets_messenger_status'])) {
                $data['theme_speedy_widgets_messenger_status'] = $setting_info['theme_speedy_widgets_messenger_status'];
        } else {
                $data['theme_speedy_widgets_messenger_status'] = 1;
        }

        if (isset($this->request->post['theme_speedy_widgets_checklang_status'])) {
                $data['theme_speedy_widgets_checklang_status'] = $this->request->post['theme_speedy_widgets_checklang_status'];
        } elseif (isset($setting_info['theme_speedy_widgets_checklang_status'])) {
                $data['theme_speedy_widgets_checklang_status'] = $setting_info['theme_speedy_widgets_checklang_status'];
        } else {
                $data['theme_speedy_widgets_checklang_status'] = 0;
        }

        if (isset($this->request->post['theme_speedy_widgets_checklang_type'])) {
                $data['theme_speedy_widgets_checklang_type'] = $this->request->post['theme_speedy_widgets_checklang_type'];
        } elseif (isset($setting_info['theme_speedy_widgets_checklang_type'])) {
                $data['theme_speedy_widgets_checklang_type'] = $setting_info['theme_speedy_widgets_checklang_type'];
        } else {
                $data['theme_speedy_widgets_checklang_type'] = 'ua_lang';
        }

        if (isset($this->request->post['theme_speedy_widgets_bottombar_status'])) {
                $data['theme_speedy_widgets_bottombar_status'] = $this->request->post['theme_speedy_widgets_bottombar_status'];
        } elseif (isset($setting_info['theme_speedy_widgets_bottombar_status'])) {
                $data['theme_speedy_widgets_bottombar_status'] = $setting_info['theme_speedy_widgets_bottombar_status'];
        } else {
                $data['theme_speedy_widgets_bottombar_status'] = 1;
        }

        // tab-adaptive

        if (isset($this->request->post['theme_speedy_adaptive_container_width_type'])) {
                $data['theme_speedy_adaptive_container_width_type'] = $this->request->post['theme_speedy_adaptive_container_width_type'];
        } elseif (isset($setting_info['theme_speedy_adaptive_container_width_type'])) {
                $data['theme_speedy_adaptive_container_width_type'] = $setting_info['theme_speedy_adaptive_container_width_type'];
        } else {
                $data['theme_speedy_adaptive_container_width_type'] = 1;
        }

        if (isset($this->request->post['theme_speedy_adaptive_container_width'])) {
                $data['theme_speedy_adaptive_container_width'] = $this->request->post['theme_speedy_adaptive_container_width'];
        } elseif (isset($setting_info['theme_speedy_adaptive_container_width'])) {
                $data['theme_speedy_adaptive_container_width'] = $setting_info['theme_speedy_adaptive_container_width'];
        } else {
                $data['theme_speedy_adaptive_container_width'] = '1470';
        }       

                // от 1366px до 1600px
                if (isset($this->request->post['theme_speedy_adaptive_container_width_type_lg'])) {
                $data['theme_speedy_adaptive_container_width_type_lg'] = $this->request->post['theme_speedy_adaptive_container_width_type_lg'];
                } elseif (isset($setting_info['theme_speedy_adaptive_container_width_type_lg'])) {
                        $data['theme_speedy_adaptive_container_width_type_lg'] = $setting_info['theme_speedy_adaptive_container_width_type_lg'];
                } else {
                        $data['theme_speedy_adaptive_container_width_type_lg'] = 1;
                }

                if (isset($this->request->post['theme_speedy_adaptive_container_width_lg'])) {
                        $data['theme_speedy_adaptive_container_width_lg'] = $this->request->post['theme_speedy_adaptive_container_width_lg'];
                } elseif (isset($setting_info['theme_speedy_adaptive_container_width_lg'])) {
                        $data['theme_speedy_adaptive_container_width_lg'] = $setting_info['theme_speedy_adaptive_container_width_lg'];
                } else {
                        $data['theme_speedy_adaptive_container_width_lg'] = '1280';
                }

                // от 1280px до 1366px
                if (isset($this->request->post['theme_speedy_adaptive_container_width_type_md'])) {
                $data['theme_speedy_adaptive_container_width_type_md'] = $this->request->post['theme_speedy_adaptive_container_width_type_md'];
                } elseif (isset($setting_info['theme_speedy_adaptive_container_width_type_md'])) {
                        $data['theme_speedy_adaptive_container_width_type_md'] = $setting_info['theme_speedy_adaptive_container_width_type_md'];
                } else {
                        $data['theme_speedy_adaptive_container_width_type_md'] = 1;
                }

                if (isset($this->request->post['theme_speedy_adaptive_container_width_md'])) {
                        $data['theme_speedy_adaptive_container_width_md'] = $this->request->post['theme_speedy_adaptive_container_width_md'];
                } elseif (isset($setting_info['theme_speedy_adaptive_container_width_md'])) {
                        $data['theme_speedy_adaptive_container_width_md'] = $setting_info['theme_speedy_adaptive_container_width_md'];
                } else {
                        $data['theme_speedy_adaptive_container_width_md'] = '1170';
                }

                // от 768px до 1280px
                if (isset($this->request->post['theme_speedy_adaptive_container_width_type_sm'])) {
                $data['theme_speedy_adaptive_container_width_type_sm'] = $this->request->post['theme_speedy_adaptive_container_width_type_sm'];
                } elseif (isset($setting_info['theme_speedy_adaptive_container_width_type_sm'])) {
                        $data['theme_speedy_adaptive_container_width_type_sm'] = $setting_info['theme_speedy_adaptive_container_width_type_sm'];
                } else {
                        $data['theme_speedy_adaptive_container_width_type_sm'] = 0;
                }

                if (isset($this->request->post['theme_speedy_adaptive_container_width_sm'])) {
                        $data['theme_speedy_adaptive_container_width_sm'] = $this->request->post['theme_speedy_adaptive_container_width_sm'];
                } elseif (isset($setting_info['theme_speedy_adaptive_container_width_sm'])) {
                        $data['theme_speedy_adaptive_container_width_sm'] = $setting_info['theme_speedy_adaptive_container_width_sm'];
                } else {
                        $data['theme_speedy_adaptive_container_width_sm'] = '90';
                }

                // от 320px до 768px
                if (isset($this->request->post['theme_speedy_adaptive_container_width_type_xs'])) {
                $data['theme_speedy_adaptive_container_width_type_xs'] = $this->request->post['theme_speedy_adaptive_container_width_type_xs'];
                } elseif (isset($setting_info['theme_speedy_adaptive_container_width_type_xs'])) {
                        $data['theme_speedy_adaptive_container_width_type_xs'] = $setting_info['theme_speedy_adaptive_container_width_type_xs'];
                } else {
                        $data['theme_speedy_adaptive_container_width_type_xs'] = 0;
                }

                if (isset($this->request->post['theme_speedy_adaptive_container_width_xs'])) {
                        $data['theme_speedy_adaptive_container_width_xs'] = $this->request->post['theme_speedy_adaptive_container_width_xs'];
                } elseif (isset($setting_info['theme_speedy_adaptive_container_width_xs'])) {
                        $data['theme_speedy_adaptive_container_width_xs'] = $setting_info['theme_speedy_adaptive_container_width_xs'];
                } else {
                        $data['theme_speedy_adaptive_container_width_xs'] = '90';
                }

        // tab-code

        if (isset($this->request->post['theme_speedy_code_header_css'])) {
                $data['theme_speedy_code_header_css'] = $this->request->post['theme_speedy_code_header_css'];
        } elseif (isset($setting_info['theme_speedy_code_header_css'])) {
                $data['theme_speedy_code_header_css'] = $setting_info['theme_speedy_code_header_css'];
        } else {
                $data['theme_speedy_code_header_css'] = '';
        }

        if (isset($this->request->post['theme_speedy_code_header_js'])) {
                $data['theme_speedy_code_header_js'] = $this->request->post['theme_speedy_code_header_js'];
        } elseif (isset($setting_info['theme_speedy_code_header_js'])) {
                $data['theme_speedy_code_header_js'] = $setting_info['theme_speedy_code_header_js'];
        } else {
                $data['theme_speedy_code_header_js'] = '';
        }

        if (isset($this->request->post['theme_speedy_code_footer_js'])) {
                $data['theme_speedy_code_footer_js'] = $this->request->post['theme_speedy_code_footer_js'];
        } elseif (isset($setting_info['theme_speedy_code_footer_js'])) {
                $data['theme_speedy_code_footer_js'] = $setting_info['theme_speedy_code_footer_js'];
        } else {
                $data['theme_speedy_code_footer_js'] = '';
        }

        if (isset($this->request->post['theme_speedy_code_header_css_link'])) {
                $data['theme_speedy_code_header_css_link'] = $this->request->post['theme_speedy_code_header_css_link'];
        } elseif (isset($setting_info['theme_speedy_code_header_css_link'])) {
                $data['theme_speedy_code_header_css_link'] = $setting_info['theme_speedy_code_header_css_link'];
        } else {
                $data['theme_speedy_code_header_css_link'] = '';
        }

        if (isset($this->request->post['theme_speedy_code_footer_js_link'])) {
                $data['theme_speedy_code_footer_js_link'] = $this->request->post['theme_speedy_code_footer_js_link'];
        } elseif (isset($setting_info['theme_speedy_code_footer_js_link'])) {
                $data['theme_speedy_code_footer_js_link'] = $setting_info['theme_speedy_code_footer_js_link'];
        } else {
                $data['theme_speedy_code_footer_js_link'] = '';
        }

        // tab-cart

        if (isset($this->request->post['theme_speedy_widgets_cart_sidebar_status'])) {
                $data['theme_speedy_widgets_cart_sidebar_status'] = $this->request->post['theme_speedy_widgets_cart_sidebar_status'];
        } elseif (isset($setting_info['theme_speedy_widgets_cart_sidebar_status'])) {
                $data['theme_speedy_widgets_cart_sidebar_status'] = $setting_info['theme_speedy_widgets_cart_sidebar_status'];
        } else {
                $data['theme_speedy_widgets_cart_sidebar_status'] = 1;
        }

        if (isset($this->request->post['theme_speedy_widgets_cart_sidebar_position'])) {
                $data['theme_speedy_widgets_cart_sidebar_position'] = $this->request->post['theme_speedy_widgets_cart_sidebar_position'];
        } elseif (isset($setting_info['theme_speedy_widgets_cart_sidebar_position'])) {
                $data['theme_speedy_widgets_cart_sidebar_position'] = $setting_info['theme_speedy_widgets_cart_sidebar_position'];
        } else {
                $data['theme_speedy_widgets_cart_sidebar_position'] = 'right';
        }

        if (isset($this->request->post['theme_speedy_widgets_cart_sidebar_clear_status'])) {
                $data['theme_speedy_widgets_cart_sidebar_clear_status'] = $this->request->post['theme_speedy_widgets_cart_sidebar_clear_status'];
        } elseif (isset($setting_info['theme_speedy_widgets_cart_sidebar_clear_status'])) {
                $data['theme_speedy_widgets_cart_sidebar_clear_status'] = $setting_info['theme_speedy_widgets_cart_sidebar_clear_status'];
        } else {
                $data['theme_speedy_widgets_cart_sidebar_clear_status'] = 0;
        }

        // tab-home

        if (isset($this->request->post['theme_speedy_home_catalog_status'])) {
                $data['theme_speedy_home_catalog_status'] = $this->request->post['theme_speedy_home_catalog_status'];
        } elseif (isset($setting_info['theme_speedy_home_catalog_status'])) {
                $data['theme_speedy_home_catalog_status'] = $setting_info['theme_speedy_home_catalog_status'];
        } else {
                $data['theme_speedy_home_catalog_status'] = 1;
        }

        // tab-catalog

        if (isset($this->request->post['theme_speedy_catalog_stickers_text'])) {
                $data['theme_speedy_catalog_stickers_text'] = $this->request->post['theme_speedy_catalog_stickers_text'];
        } elseif (isset($setting_info['theme_speedy_catalog_stickers_text'])) {
                $data['theme_speedy_catalog_stickers_text'] = $setting_info['theme_speedy_catalog_stickers_text'];
        } else {
                $data['theme_speedy_catalog_stickers_text'] = 1;
        }

        if (isset($this->request->post['theme_speedy_catalog_stickers_image'])) {
                $data['theme_speedy_catalog_stickers_image'] = $this->request->post['theme_speedy_catalog_stickers_image'];
        } elseif (isset($setting_info['theme_speedy_catalog_stickers_image'])) {
                $data['theme_speedy_catalog_stickers_image'] = $setting_info['theme_speedy_catalog_stickers_image'];
        } else {
                $data['theme_speedy_catalog_stickers_image'] = 0;
        }

        if (isset($this->request->post['theme_speedy_catalog_description'])) {
                $data['theme_speedy_catalog_description'] = $this->request->post['theme_speedy_catalog_description'];
        } elseif (isset($setting_info['theme_speedy_catalog_description'])) {
                $data['theme_speedy_catalog_description'] = $setting_info['theme_speedy_catalog_description'];
        } else {
                $data['theme_speedy_catalog_description'] = 0;
        }

        if (isset($this->request->post['theme_speedy_catalog_model'])) {
                $data['theme_speedy_catalog_model'] = $this->request->post['theme_speedy_catalog_model'];
        } elseif (isset($setting_info['theme_speedy_catalog_model'])) {
                $data['theme_speedy_catalog_model'] = $setting_info['theme_speedy_catalog_model'];
        } else {
                $data['theme_speedy_catalog_model'] = 0;
        }

        if (isset($this->request->post['theme_speedy_catalog_stock'])) {
                $data['theme_speedy_catalog_stock'] = $this->request->post['theme_speedy_catalog_stock'];
        } elseif (isset($setting_info['theme_speedy_catalog_stock'])) {
                $data['theme_speedy_catalog_stock'] = $setting_info['theme_speedy_catalog_stock'];
        } else {
                $data['theme_speedy_catalog_stock'] = 1;
        }

        if (isset($this->request->post['theme_speedy_catalog_attribute_groups'])) {
                $data['theme_speedy_catalog_attribute_groups'] = $this->request->post['theme_speedy_catalog_attribute_groups'];
        } elseif (isset($setting_info['theme_speedy_catalog_attribute_groups'])) {
                $data['theme_speedy_catalog_attribute_groups'] = $setting_info['theme_speedy_catalog_attribute_groups'];
        } else {
                $data['theme_speedy_catalog_attribute_groups'] = 1;
        }

        if (isset($this->request->post['theme_speedy_catalog_quantity'])) {
                $data['theme_speedy_catalog_quantity'] = $this->request->post['theme_speedy_catalog_quantity'];
        } elseif (isset($setting_info['theme_speedy_catalog_quantity'])) {
                $data['theme_speedy_catalog_quantity'] = $setting_info['theme_speedy_catalog_quantity'];
        } else {
                $data['theme_speedy_catalog_quantity'] = 1;
        }

        if (isset($this->request->post['theme_speedy_catalog_button_cart'])) {
                $data['theme_speedy_catalog_button_cart'] = $this->request->post['theme_speedy_catalog_button_cart'];
        } elseif (isset($setting_info['theme_speedy_catalog_button_cart'])) {
                $data['theme_speedy_catalog_button_cart'] = $setting_info['theme_speedy_catalog_button_cart'];
        } else {
                $data['theme_speedy_catalog_button_cart'] = 1;
        }

        if (isset($this->request->post['theme_speedy_description_position'])) {
                $data['theme_speedy_description_position'] = $this->request->post['theme_speedy_description_position'];
        } elseif (isset($setting_info['theme_speedy_description_position'])) {
                $data['theme_speedy_description_position'] = $setting_info['theme_speedy_description_position'];
        } else {
                $data['theme_speedy_description_position'] = 1;
        }

        if (isset($this->request->post['theme_speedy_category_refine_img'])) {
                $data['theme_speedy_category_refine_img'] = $this->request->post['theme_speedy_category_refine_img'];
        } elseif (isset($setting_info['theme_speedy_category_refine_img'])) {
                $data['theme_speedy_category_refine_img'] = $setting_info['theme_speedy_category_refine_img'];
        } else {
                $data['theme_speedy_category_refine_img'] = 1;
        }

        // tab-product

        if (isset($this->request->post['theme_speedy_product_fixed_scroll_thumbs'])) {
                $data['theme_speedy_product_fixed_scroll_thumbs'] = $this->request->post['theme_speedy_product_fixed_scroll_thumbs'];
        } elseif (isset($setting_info['theme_speedy_product_fixed_scroll_thumbs'])) {
                $data['theme_speedy_product_fixed_scroll_thumbs'] = $setting_info['theme_speedy_product_fixed_scroll_thumbs'];
        } else {
                $data['theme_speedy_product_fixed_scroll_thumbs'] = 1;
        }

        if (isset($this->request->post['theme_speedy_product_manufacturer'])) {
                $data['theme_speedy_product_manufacturer'] = $this->request->post['theme_speedy_product_manufacturer'];
        } elseif (isset($setting_info['theme_speedy_product_manufacturer'])) {
                $data['theme_speedy_product_manufacturer'] = $setting_info['theme_speedy_product_manufacturer'];
        } else {
                $data['theme_speedy_product_manufacturer'] = 1;
        }

        if (isset($this->request->post['theme_speedy_product_model'])) {
                $data['theme_speedy_product_model'] = $this->request->post['theme_speedy_product_model'];
        } elseif (isset($setting_info['theme_speedy_product_model'])) {
                $data['theme_speedy_product_model'] = $setting_info['theme_speedy_product_model'];
        } else {
                $data['theme_speedy_product_model'] = 1;
        }

        if (isset($this->request->post['theme_speedy_product_sku'])) {
                $data['theme_speedy_product_sku'] = $this->request->post['theme_speedy_product_sku'];
        } elseif (isset($setting_info['theme_speedy_product_sku'])) {
                $data['theme_speedy_product_sku'] = $setting_info['theme_speedy_product_sku'];
        } else {
                $data['theme_speedy_product_sku'] = 0;
        }

        if (isset($this->request->post['theme_speedy_product_stock'])) {
                $data['theme_speedy_product_stock'] = $this->request->post['theme_speedy_product_stock'];
        } elseif (isset($setting_info['theme_speedy_product_stock'])) {
                $data['theme_speedy_product_stock'] = $setting_info['theme_speedy_product_stock'];
        } else {
                $data['theme_speedy_product_stock'] = 1;
        }

        if (isset($this->request->post['theme_speedy_product_purchased_product'])) {
                $data['theme_speedy_product_purchased_product'] = $this->request->post['theme_speedy_product_purchased_product'];
        } elseif (isset($setting_info['theme_speedy_product_purchased_product'])) {
                $data['theme_speedy_product_purchased_product'] = $setting_info['theme_speedy_product_purchased_product'];
        } else {
                $data['theme_speedy_product_purchased_product'] = 0;
        }

        if (isset($this->request->post['theme_speedy_product_viewed'])) {
                $data['theme_speedy_product_viewed'] = $this->request->post['theme_speedy_product_viewed'];
        } elseif (isset($setting_info['theme_speedy_product_viewed'])) {
                $data['theme_speedy_product_viewed'] = $setting_info['theme_speedy_product_viewed'];
        } else {
                $data['theme_speedy_product_viewed'] = 0;
        }

        if (isset($this->request->post['theme_speedy_product_fixed_nav_tabs'])) {
                $data['theme_speedy_product_fixed_nav_tabs'] = $this->request->post['theme_speedy_product_fixed_nav_tabs'];
        } elseif (isset($setting_info['theme_speedy_product_fixed_nav_tabs'])) {
                $data['theme_speedy_product_fixed_nav_tabs'] = $setting_info['theme_speedy_product_fixed_nav_tabs'];
        } else {
                $data['theme_speedy_product_fixed_nav_tabs'] = 1;
        }

        if (isset($this->request->post['theme_speedy_product_button_cart'])) {
                $data['theme_speedy_product_button_cart'] = $this->request->post['theme_speedy_product_button_cart'];
        } elseif (isset($setting_info['theme_speedy_product_button_cart'])) {
                $data['theme_speedy_product_button_cart'] = $setting_info['theme_speedy_product_button_cart'];
        } else {
                $data['theme_speedy_product_button_cart'] = 1;
        }

        if (isset($this->request->post['theme_speedy_product_special_price_type'])) {
                $data['theme_speedy_product_special_price_type'] = $this->request->post['theme_speedy_product_special_price_type'];
        } elseif (isset($setting_info['theme_speedy_product_special_price_type'])) {
                $data['theme_speedy_product_special_price_type'] = $setting_info['theme_speedy_product_special_price_type'];
        } else {
                $data['theme_speedy_product_special_price_type'] = 'percent';
        }

        if (isset($this->request->post['theme_speedy_product_bottom_bar'])) {
                $data['theme_speedy_product_bottom_bar'] = $this->request->post['theme_speedy_product_bottom_bar'];
        } elseif (isset($setting_info['theme_speedy_product_bottom_bar'])) {
                $data['theme_speedy_product_bottom_bar'] = $setting_info['theme_speedy_product_bottom_bar'];
        } else {
                $data['theme_speedy_product_bottom_bar'] = 1;
        }

        // if (isset($this->request->post['theme_speedy_product_fast_checkout_status'])) {
        //         $data['theme_speedy_product_fast_checkout_status'] = $this->request->post['theme_speedy_product_fast_checkout_status'];
        // } elseif (isset($setting_info['theme_speedy_product_fast_checkout_status'])) {
        //         $data['theme_speedy_product_fast_checkout_status'] = $setting_info['theme_speedy_product_fast_checkout_status'];
        // } else {
        //         $data['theme_speedy_product_fast_checkout_status'] = 1;
        // }

        // if (isset($this->request->post['theme_speedy_product_fast_checkout_mask'])) {
        //         $data['theme_speedy_product_fast_checkout_mask'] = $this->request->post['theme_speedy_product_fast_checkout_mask'];
        // } elseif (isset($setting_info['theme_speedy_product_fast_checkout_mask'])) {
        //         $data['theme_speedy_product_fast_checkout_mask'] = $setting_info['theme_speedy_product_fast_checkout_mask'];
        // } else {
        //         $data['theme_speedy_product_fast_checkout_mask'] = '+38 (099) 999-99-99';
        // }

        // if (isset($this->request->post['theme_speedy_fast_buy_background'])) {
        //         $data['theme_speedy_fast_buy_background'] = $this->request->post['theme_speedy_fast_buy_background'];
        // } elseif (isset($setting_info['theme_speedy_fast_buy_background'])) {
        //         $data['theme_speedy_fast_buy_background'] = $setting_info['theme_speedy_fast_buy_background'];
        // } else {
        //         $data['theme_speedy_fast_buy_background'] = 'rgba(41, 134, 204, 0.109)';
        // }

                // tab-product-shipping

                if (isset($this->request->post['theme_speedy_product_shipping_status'])) {
                        $data['theme_speedy_product_shipping_status'] = $this->request->post['theme_speedy_product_shipping_status'];
                } elseif (isset($setting_info['theme_speedy_product_shipping_status'])) {
                        $data['theme_speedy_product_shipping_status'] = $setting_info['theme_speedy_product_shipping_status'];
                } else {
                        $data['theme_speedy_product_shipping_status'] = 1;
                }

                if (isset($this->request->post['theme_speedy_product_shipping_description'])) {
                        $data['theme_speedy_product_shipping_description'] = $this->request->post['theme_speedy_product_shipping_description'];
                } elseif (isset($setting_info['theme_speedy_product_shipping_description'])) {
                        $data['theme_speedy_product_shipping_description'] = $setting_info['theme_speedy_product_shipping_description'];
                } else {
                        $data['theme_speedy_product_shipping_description'] = '';
                }

                if (isset($this->request->post['theme_speedy_product_shipping_items'])) {
                        $data['theme_speedy_product_shipping_items'] = $this->request->post['theme_speedy_product_shipping_items'];
                } elseif (!empty($setting_info)) {
                        $theme_speedy_product_shipping_items = $setting_info['theme_speedy_product_shipping_item'];
                } else {
                        $data['theme_speedy_product_shipping_items'] = array();
                }

                $data['theme_speedy_product_shipping_items'] = array();

                foreach ($theme_speedy_product_shipping_items as $key => $value) {
                        foreach ($value as $theme_speedy_product_shipping_item) {
                                if (is_file(DIR_IMAGE . $theme_speedy_product_shipping_item['image'])) {
                                        $shipping_image = $theme_speedy_product_shipping_item['image'];
                                        $shipping_thumb = $theme_speedy_product_shipping_item['image'];
                                } else {
                                        $shipping_image = '';
                                        $shipping_thumb = 'no_image.png';
                                }

                                $data['theme_speedy_product_shipping_items'][$key][] = array(
                                        'title'      => $theme_speedy_product_shipping_item['title'],
                                        'image'      => $shipping_image,
                                        'thumb'      => $this->model_tool_image->resize($shipping_thumb, 100, 100),
                                        'sort_order' => $theme_speedy_product_shipping_item['sort_order']
                                );
                        }
                }

                //

                // tab-product-payment

                if (isset($this->request->post['theme_speedy_product_payment_status'])) {
                        $data['theme_speedy_product_payment_status'] = $this->request->post['theme_speedy_product_payment_status'];
                } elseif (isset($setting_info['theme_speedy_product_payment_status'])) {
                        $data['theme_speedy_product_payment_status'] = $setting_info['theme_speedy_product_payment_status'];
                } else {
                        $data['theme_speedy_product_payment_status'] = 1;
                }

                if (isset($this->request->post['theme_speedy_product_payment_description'])) {
                        $data['theme_speedy_product_payment_description'] = $this->request->post['theme_speedy_product_payment_description'];
                } elseif (isset($setting_info['theme_speedy_product_payment_description'])) {
                        $data['theme_speedy_product_payment_description'] = $setting_info['theme_speedy_product_payment_description'];
                } else {
                        $data['theme_speedy_product_payment_description'] = '';
                }

                if (isset($this->request->post['theme_speedy_product_payment_items'])) {
                        $data['theme_speedy_product_payment_items'] = $this->request->post['theme_speedy_product_payment_items'];
                } elseif (!empty($setting_info)) {
                        $theme_speedy_product_payment_items = $setting_info['theme_speedy_product_payment_item'];
                } else {
                        $data['theme_speedy_product_payment_items'] = array();
                }

                $data['theme_speedy_product_payment_items'] = array();

                foreach ($theme_speedy_product_payment_items as $key => $value) {
                        foreach ($value as $theme_speedy_product_payment_item) {
                                if (is_file(DIR_IMAGE . $theme_speedy_product_payment_item['image'])) {
                                        $payment_image = $theme_speedy_product_payment_item['image'];
                                        $payment_thumb = $theme_speedy_product_payment_item['image'];
                                } else {
                                        $payment_image = '';
                                        $payment_thumb = 'no_image.png';
                                }

                                $data['theme_speedy_product_payment_items'][$key][] = array(
                                        'title'      => $theme_speedy_product_payment_item['title'],
                                        'image'      => $payment_image,
                                        'thumb'      => $this->model_tool_image->resize($payment_thumb, 100, 100),
                                        'sort_order' => $theme_speedy_product_payment_item['sort_order']
                                );
                        }
                }

                // tab-product-guarantee

                if (isset($this->request->post['theme_speedy_product_guarantee_status'])) {
                        $data['theme_speedy_product_guarantee_status'] = $this->request->post['theme_speedy_product_guarantee_status'];
                } elseif (isset($setting_info['theme_speedy_product_guarantee_status'])) {
                        $data['theme_speedy_product_guarantee_status'] = $setting_info['theme_speedy_product_guarantee_status'];
                } else {
                        $data['theme_speedy_product_guarantee_status'] = 1;
                }

                if (isset($this->request->post['theme_speedy_product_guarantee_description'])) {
                        $data['theme_speedy_product_guarantee_description'] = $this->request->post['theme_speedy_product_guarantee_description'];
                } elseif (isset($setting_info['theme_speedy_product_guarantee_description'])) {
                        $data['theme_speedy_product_guarantee_description'] = $setting_info['theme_speedy_product_guarantee_description'];
                } else {
                        $data['theme_speedy_product_guarantee_description'] = '';
                }

                // tab-product-edges

                if (isset($this->request->post['theme_speedy_product_edges_status'])) {
                        $data['theme_speedy_product_edges_status'] = $this->request->post['theme_speedy_product_edges_status'];
                } elseif (isset($setting_info['theme_speedy_product_edges_status'])) {
                        $data['theme_speedy_product_edges_status'] = $setting_info['theme_speedy_product_edges_status'];
                } else {
                        $data['theme_speedy_product_edges_status'] = 1;
                }

                if (isset($this->request->post['theme_speedy_product_edges_items'])) {
                        $data['theme_speedy_product_edges_items'] = $this->request->post['theme_speedy_product_edges_items'];
                } elseif (!empty($setting_info)) {
                        $theme_speedy_product_edges_items = $setting_info['theme_speedy_product_edges_item'];
                } else {
                        $data['theme_speedy_product_edges_items'] = array();
                }

                $data['theme_speedy_product_edges_items'] = array();

                foreach ($theme_speedy_product_edges_items as $key => $value) {
                        foreach ($value as $theme_speedy_product_edges_item) {
                                if (is_file(DIR_IMAGE . $theme_speedy_product_edges_item['image'])) {
                                        $edges_image = $theme_speedy_product_edges_item['image'];
                                        $edges_thumb = $theme_speedy_product_edges_item['image'];
                                } else {
                                        $edges_image = '';
                                        $edges_thumb = 'no_image.png';
                                }

                                $data['theme_speedy_product_edges_items'][$key][] = array(
                                        'title'      => $theme_speedy_product_edges_item['title'],
                                        'image'      => $edges_image,
                                        'thumb'      => $this->model_tool_image->resize($edges_thumb, 100, 100)
                                );
                        }
                }

                // tab-product-questions

                if (isset($this->request->post['theme_speedy_product_questions_status'])) {
                        $data['theme_speedy_product_questions_status'] = $this->request->post['theme_speedy_product_questions_status'];
                } elseif (isset($setting_info['theme_speedy_product_questions_status'])) {
                        $data['theme_speedy_product_questions_status'] = $setting_info['theme_speedy_product_questions_status'];
                } else {
                        $data['theme_speedy_product_questions_status'] = '';
                }

                // tab-product-sticker-text

                if (isset($this->request->post['theme_speedy_product_sticker_text_status'])) {
                        $data['theme_speedy_product_sticker_text_status'] = $this->request->post['theme_speedy_product_sticker_text_status'];
                } elseif (isset($setting_info['theme_speedy_product_sticker_text_status'])) {
                        $data['theme_speedy_product_sticker_text_status'] = $setting_info['theme_speedy_product_sticker_text_status'];
                } else {
                        $data['theme_speedy_product_sticker_text_status'] = 1;
                }

                        // tab-product-sticker-text-new

                        if (isset($this->request->post['theme_speedy_product_sticker_new_status'])) {
                                $data['theme_speedy_product_sticker_new_status'] = $this->request->post['theme_speedy_product_sticker_new_status'];
                        } elseif (isset($setting_info['theme_speedy_product_sticker_new_status'])) {
                                $data['theme_speedy_product_sticker_new_status'] = $setting_info['theme_speedy_product_sticker_new_status'];
                        } else {
                                $data['theme_speedy_product_sticker_new_status'] = 1;
                        }

                        if (isset($this->request->post['theme_speedy_product_sticker_new_background'])) {
                                $data['theme_speedy_product_sticker_new_background'] = $this->request->post['theme_speedy_product_sticker_new_background'];
                        } elseif (isset($setting_info['theme_speedy_product_sticker_new_background'])) {
                                $data['theme_speedy_product_sticker_new_background'] = $setting_info['theme_speedy_product_sticker_new_background'];
                        } else {
                                $data['theme_speedy_product_sticker_new_background'] = '#000000';
                        }

                        if (isset($this->request->post['theme_speedy_product_sticker_new_name'])) {
                                $data['theme_speedy_product_sticker_new_name'] = $this->request->post['theme_speedy_product_sticker_new_name'];
                        } elseif (isset($setting_info['theme_speedy_product_sticker_new_name'])) {
                                $data['theme_speedy_product_sticker_new_name'] = $setting_info['theme_speedy_product_sticker_new_name'];
                        } else {
                                $data['theme_speedy_product_sticker_new_name'] = '';
                        }

                        if (isset($this->request->post['theme_speedy_product_sticker_new_days'])) {
                                $data['theme_speedy_product_sticker_new_days'] = $this->request->post['theme_speedy_product_sticker_new_days'];
                        } elseif (isset($setting_info['theme_speedy_product_sticker_new_days'])) {
                                $data['theme_speedy_product_sticker_new_days'] = $setting_info['theme_speedy_product_sticker_new_days'];
                        } else {
                                $data['theme_speedy_product_sticker_new_days'] = 5;
                        }

                        // tab-product-sticker-text-special

                        if (isset($this->request->post['theme_speedy_product_sticker_special_status'])) {
                                $data['theme_speedy_product_sticker_special_status'] = $this->request->post['theme_speedy_product_sticker_special_status'];
                        } elseif (isset($setting_info['theme_speedy_product_sticker_special_status'])) {
                                $data['theme_speedy_product_sticker_special_status'] = $setting_info['theme_speedy_product_sticker_special_status'];
                        } else {
                                $data['theme_speedy_product_sticker_special_status'] = 1;
                        }

                        if (isset($this->request->post['theme_speedy_product_sticker_special_background'])) {
                                $data['theme_speedy_product_sticker_special_background'] = $this->request->post['theme_speedy_product_sticker_special_background'];
                        } elseif (isset($setting_info['theme_speedy_product_sticker_special_background'])) {
                                $data['theme_speedy_product_sticker_special_background'] = $setting_info['theme_speedy_product_sticker_special_background'];
                        } else {
                                $data['theme_speedy_product_sticker_special_background'] = '#000000';
                        }

                        if (isset($this->request->post['theme_speedy_product_sticker_special_name'])) {
                                $data['theme_speedy_product_sticker_special_name'] = $this->request->post['theme_speedy_product_sticker_special_name'];
                        } elseif (isset($setting_info['theme_speedy_product_sticker_special_name'])) {
                                $data['theme_speedy_product_sticker_special_name'] = $setting_info['theme_speedy_product_sticker_special_name'];
                        } else {
                                $data['theme_speedy_product_sticker_special_name'] = '';
                        }

                        // tab-product-sticker-text-sale

                        if (isset($this->request->post['theme_speedy_product_sticker_sale_status'])) {
                                $data['theme_speedy_product_sticker_sale_status'] = $this->request->post['theme_speedy_product_sticker_sale_status'];
                        } elseif (isset($setting_info['theme_speedy_product_sticker_sale_status'])) {
                                $data['theme_speedy_product_sticker_sale_status'] = $setting_info['theme_speedy_product_sticker_sale_status'];
                        } else {
                                $data['theme_speedy_product_sticker_sale_status'] = 1;
                        }

                        if (isset($this->request->post['theme_speedy_product_sticker_sale_background'])) {
                                $data['theme_speedy_product_sticker_sale_background'] = $this->request->post['theme_speedy_product_sticker_sale_background'];
                        } elseif (isset($setting_info['theme_speedy_product_sticker_sale_background'])) {
                                $data['theme_speedy_product_sticker_sale_background'] = $setting_info['theme_speedy_product_sticker_sale_background'];
                        } else {
                                $data['theme_speedy_product_sticker_sale_background'] = '#000000';
                        }

                        if (isset($this->request->post['theme_speedy_product_sticker_sale_name'])) {
                                $data['theme_speedy_product_sticker_sale_name'] = $this->request->post['theme_speedy_product_sticker_sale_name'];
                        } elseif (isset($setting_info['theme_speedy_product_sticker_sale_name'])) {
                                $data['theme_speedy_product_sticker_sale_name'] = $setting_info['theme_speedy_product_sticker_sale_name'];
                        } else {
                                $data['theme_speedy_product_sticker_sale_name'] = '';
                        }

                        if (isset($this->request->post['theme_speedy_product_sticker_sale_count'])) {
                                $data['theme_speedy_product_sticker_sale_count'] = $this->request->post['theme_speedy_product_sticker_sale_count'];
                        } elseif (isset($setting_info['theme_speedy_product_sticker_sale_count'])) {
                                $data['theme_speedy_product_sticker_sale_count'] = $setting_info['theme_speedy_product_sticker_sale_count'];
                        } else {
                                $data['theme_speedy_product_sticker_sale_count'] = 100;
                        }

                        // tab-product-sticker-text-hot

                        if (isset($this->request->post['theme_speedy_product_sticker_hot_status'])) {
                                $data['theme_speedy_product_sticker_hot_status'] = $this->request->post['theme_speedy_product_sticker_hot_status'];
                        } elseif (isset($setting_info['theme_speedy_product_sticker_hot_status'])) {
                                $data['theme_speedy_product_sticker_hot_status'] = $setting_info['theme_speedy_product_sticker_hot_status'];
                        } else {
                                $data['theme_speedy_product_sticker_hot_status'] = 1;
                        }

                        if (isset($this->request->post['theme_speedy_product_sticker_hot_background'])) {
                                $data['theme_speedy_product_sticker_hot_background'] = $this->request->post['theme_speedy_product_sticker_hot_background'];
                        } elseif (isset($setting_info['theme_speedy_product_sticker_hot_background'])) {
                                $data['theme_speedy_product_sticker_hot_background'] = $setting_info['theme_speedy_product_sticker_hot_background'];
                        } else {
                                $data['theme_speedy_product_sticker_hot_background'] = 1;
                        }

                        if (isset($this->request->post['theme_speedy_product_sticker_hot_name'])) {
                                $data['theme_speedy_product_sticker_hot_name'] = $this->request->post['theme_speedy_product_sticker_hot_name'];
                        } elseif (isset($setting_info['theme_speedy_product_sticker_hot_name'])) {
                                $data['theme_speedy_product_sticker_hot_name'] = $setting_info['theme_speedy_product_sticker_hot_name'];
                        } else {
                                $data['theme_speedy_product_sticker_hot_name'] = '';
                        }

                        if (isset($this->request->post['theme_speedy_product_sticker_hot_count'])) {
                                $data['theme_speedy_product_sticker_hot_count'] = $this->request->post['theme_speedy_product_sticker_hot_count'];
                        } elseif (isset($setting_info['theme_speedy_product_sticker_hot_count'])) {
                                $data['theme_speedy_product_sticker_hot_count'] = $setting_info['theme_speedy_product_sticker_hot_count'];
                        } else {
                                $data['theme_speedy_product_sticker_hot_count'] = 1000;
                        }

                // tab-product-sticker-text

                if (isset($this->request->post['theme_speedy_product_video_status'])) {
                        $data['theme_speedy_product_video_status'] = $this->request->post['theme_speedy_product_video_status'];
                } elseif (isset($setting_info['theme_speedy_product_video_status'])) {
                        $data['theme_speedy_product_video_status'] = $setting_info['theme_speedy_product_video_status'];
                } else {
                        $data['theme_speedy_product_video_status'] = 0;
                }

                if (isset($this->request->post['theme_speedy_product_video_additional'])) {
                        $data['theme_speedy_product_video_additional'] = $this->request->post['theme_speedy_product_video_additional'];
                } elseif (isset($setting_info['theme_speedy_product_video_additional'])) {
                        $data['theme_speedy_product_video_additional'] = $setting_info['theme_speedy_product_video_additional'];
                } else {
                        $data['theme_speedy_product_video_additional'] = 1;
                }

                if (isset($this->request->post['theme_speedy_product_video_tab'])) {
                        $data['theme_speedy_product_video_tab'] = $this->request->post['theme_speedy_product_video_tab'];
                } elseif (isset($setting_info['theme_speedy_product_video_tab'])) {
                        $data['theme_speedy_product_video_tab'] = $setting_info['theme_speedy_product_video_tab'];
                } else {
                        $data['theme_speedy_product_video_tab'] = 1;
                }

        // tab-information
        // tab-contacts

                if (isset($this->request->post['theme_speedy_contacts_contact_status'])) {
                        $data['theme_speedy_contacts_contact_status'] = $this->request->post['theme_speedy_contacts_contact_status'];
                } elseif (isset($setting_info['theme_speedy_contacts_contact_status'])) {
                        $data['theme_speedy_contacts_contact_status'] = $setting_info['theme_speedy_contacts_contact_status'];
                } else {
                        $data['theme_speedy_contacts_contact_status'] = 1;
                }

                if (isset($this->request->post['theme_speedy_contacts_shops_status'])) {
                        $data['theme_speedy_contacts_shops_status'] = $this->request->post['theme_speedy_contacts_shops_status'];
                } elseif (isset($setting_info['theme_speedy_contacts_shops_status'])) {
                        $data['theme_speedy_contacts_shops_status'] = $setting_info['theme_speedy_contacts_shops_status'];
                } else {
                        $data['theme_speedy_contacts_shops_status'] = 1;
                }
                
        // tab-checkout

        if (isset($this->request->post['theme_speedy_checkout_fixed_cart'])) {
                $data['theme_speedy_checkout_fixed_cart'] = $this->request->post['theme_speedy_checkout_fixed_cart'];
        } elseif (isset($setting_info['theme_speedy_checkout_fixed_cart'])) {
                $data['theme_speedy_checkout_fixed_cart'] = $setting_info['theme_speedy_checkout_fixed_cart'];
        } else {
                $data['theme_speedy_checkout_fixed_cart'] = 1;
        }

        if (isset($this->request->post['theme_speedy_checkout_label_view'])) {
                $data['theme_speedy_checkout_label_view'] = $this->request->post['theme_speedy_checkout_label_view'];
        } elseif (isset($setting_info['theme_speedy_checkout_label_view'])) {
                $data['theme_speedy_checkout_label_view'] = $setting_info['theme_speedy_checkout_label_view'];
        } else {
                $data['theme_speedy_checkout_label_view'] = 1;
        }

        //tab-register

        if (isset($this->request->post['theme_speedy_register_rules'])) {
                $data['theme_speedy_register_rules'] = $this->request->post['theme_speedy_register_rules'];
        } elseif (isset($setting_info['theme_speedy_register_rules'])) {
                $data['theme_speedy_register_rules'] = $setting_info['theme_speedy_register_rules'];
        } else {
                $data['theme_speedy_register_rules'] = 1;
        }

        if (isset($this->request->post['theme_speedy_register_rules_description'])) {
                $data['theme_speedy_register_rules_description'] = $this->request->post['theme_speedy_register_rules_description'];
        } elseif (isset($setting_info['theme_speedy_register_rules_description'])) {
                $data['theme_speedy_register_rules_description'] = $setting_info['theme_speedy_register_rules_description'];
        } else {
                $data['theme_speedy_register_rules_description'] = '';
        }

        $data['simple_link'] = $this->url->link('extension/module/simple', 'user_token=' . $this->session->data['user_token'], true);
        $data['dc_menu_link'] = $this->url->link('extension/module/speedy_menu', 'user_token=' . $this->session->data['user_token'], true);