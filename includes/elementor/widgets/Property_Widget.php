<?php

namespace Qeema;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Property_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'aff_property_block';
    }

    public function get_title()
    {
        return esc_html__('Property Block', 'Qeema');
    }

    public function get_icon()
    {
        return 'eicon-image-box';
    }

    public function get_categories()
    {
        return ['qeema-category'];
    }

    public function get_keywords()
    {
        return ['property', 'qeema'];
    }

    protected function register_controls()
    {
        // Create Query public Settings.
        $this->start_controls_section(
            'property_content',
            [
                'label' => esc_html__('Query Settings', 'Qeema'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'member_column',
            [
                'label' => esc_html__('Column', 'Qeema'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'col-lg-3' => esc_html__('4 Columns', 'Qeema'),
                    'col-lg-4' => esc_html__('3 Columns', 'Qeema'),
                ],
                'default' => 'col-lg-3',
            ]
        );

        $this->add_control(
            'posts_limit',
            [
                'label' => esc_html__('Limit', 'Qeema'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'step' => 1,
                'default' => 8
            ]
        );

        $this->add_control(
            'order',
            [
                'label' => esc_html__('Order By', 'Qeema'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'desc' => esc_html__('DESC', 'Qeema'),
                    'asc' => esc_html__('ASC', 'Qeema'),
                ],
                'default' => 'desc'
            ]
        );

        $this->end_controls_section();

        // Create Content Settings.
        $this->start_controls_section(
            'property_container_style',
            [
                'label' => esc_html__('Item Content', 'Qeema'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'overlay',
            [
                'label' => esc_html__('Overlay', 'Qeema'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'bg-overlay-gradient-1' => esc_html__('Gradient 01', 'Qeema'),
                    'bg-overlay-gradient-2' => esc_html__('Gradient 02', 'Qeema'),
                    'bg-overlay-gradient-3' => esc_html__('Gradient 03', 'Qeema'),
                    'bg-overlay-gradient-4' => esc_html__('Gradient 04', 'Qeema'),
                    'bg-overlay-gradient-5' => esc_html__('Gradient 05', 'Qeema')
                ],
                'default' => 'bg-overlay-gradient-1'
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'container_box_shadow',
                'selector' => '{{WRAPPER}} .card',
            ]
        );

        $this->add_control(
            'property_margin',
            [
                'label' => esc_html__('Margin', 'Qeema'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .card' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'default' => [
                    'top' => '',
                    'right' => '',
                    'bottom' => '2',
                    'left' => '',
                    'unit' => 'rem',
                    'isLinked' => '',
                ]
            ]
        );

        $this->add_control(
            'property_padding',
            [
                'label' => esc_html__('Padding', 'Qeema'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .card' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'property_border',
                'selector' => '{{WRAPPER}} .card',
            ]
        );

        $this->add_control(
            'property_content_radius',
            [
                'label' => esc_html__('Border Radius', 'Qeema'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 0
                ],
                'selectors' => [
                    '{{WRAPPER}} .card' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Create Image Settings.
        $this->start_controls_section(
         'property_image_style',
             [
               'label' => esc_html__( 'Image', 'Qeema' ),
               'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
             ]
        );
        
        $this->add_control(
            'property_iamge_radius',
            [
                'label' => esc_html__('Width', 'Qeema'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 6
                ],
                'selectors' => [
                    '{{WRAPPER}} img' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'image_box_shadow',
                'selector' => '{{WRAPPER}} .property-content',
            ]
        );
        
        $this->end_controls_section();

        // Create Title Settings.
        $this->start_controls_section(
            'property_item_title_style',
            [
                'label' => esc_html__('Item Title', 'Qeema'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        // Title Color
        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Title Color', 'Qeema'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .h5' => 'color: {{VALUE}}',
                ],
            ]
        );

        // Title Font Family
        $this->add_control(
            'title_font_family',
            [
                'label' => esc_html__('Title Font Family', 'Qeema'),
                'type' => \Elementor\Controls_Manager::FONT,
                'default' => "'PT Sans', sans-serif",
                'selectors' => [
                    '{{WRAPPER}} .h5' => 'font-family: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include getElementorView('render-property-widget');
    }
}