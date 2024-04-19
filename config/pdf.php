<?php

return [
    'mode'                     => '',
    'format'                   => 'A4',
    'default_font_size'        => '12',
    'default_font'             => 'TimesNewRoman',
    'margin_left'              => 10,
    'margin_right'             => 10,
    'margin_top'               => 10,
    'margin_bottom'            => 10,
    'margin_header'            => 0,
    'margin_footer'            => 0,
    'orientation'              => 'P',
    'title'                    => 'mPDF',
    'subject'                  => '',
    'author'                   => '',
    'watermark'                => '',
    'show_watermark'           => false,
    'show_watermark_image'     => false,
    'watermark_font'           => 'sans-serif',
    'display_mode'             => 'fullpage',
    'watermark_text_alpha'     => 0.1,
    'watermark_image_path'     => '',
    'watermark_image_alpha'    => 0.2,
    'watermark_image_size'     => 'D',
    'watermark_image_position' => 'P',
    'custom_font_dir'          => __DIR__ . '/../fonts/',
    'custom_font_data'         => [
        'TimesNewRoman' => [ // must be lowercase and snake_case
            'R'  => 'TimesNewRomanPSMT.ttf',    // regular font
            'B'  => 'TimesNewRomanPS-BoldMT.ttf',       // optional: bold font
            'I'  => 'TimesNewRomanPS-ItalicMT.ttf',     // optional: italic font
            'BI' => 'TimesNewRomanPS-BoldItalicMT.ttf' // optional: bold-italic font
        ]
    ],
    'auto_language_detection'  => false,
    'temp_dir'                 => rtrim(sys_get_temp_dir(), DIRECTORY_SEPARATOR),
    'pdfa'                     => false,
    'pdfaauto'                 => false,
    'use_active_forms'         => false,
];
