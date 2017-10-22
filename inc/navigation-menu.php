<?php

class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
	function display_element( $element, &$children_elements, $max_depth, $depth = 0, $args, &$output ) {
		$element->hasChildren = isset( $children_elements[ $element->ID ] ) && ! empty( $children_elements[ $element->ID ] );
		
		return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}
	
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );
		
		$classes = array( 'dropdown-menu' );
		
		$class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		
		$output .= "{$n}{$indent}<ul $class_names>{$n}";
	}
	
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );
		$output .= "$indent</ul>{$n}";
	}
	
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';
		
		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = '';
		
		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
		
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		if ( $item->current || $item->current_item_ancestor || $item->current_item_parent ) {
			$class_names_active = 'active';
		} else {
			$class_names_active = '';
		}
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
		$id = $id ? ' id=""' : '';
		if ( $item->hasChildren ) {
			$li_has_children = 'class="dropdown ' . $class_names_active . '"';
		} else {
			$li_has_children = 'class="' . $class_names_active . '"';
		}
		
		$output .= $indent . '<li ' . $li_has_children . '>';
		
		$atts                = array();
		$atts['title']       = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target']      = ! empty( $item->target ) ? $item->target : '';
		$atts['rel']         = ! empty( $item->xfn ) ? $item->xfn : '';
		$atts['href']        = ! empty( $item->url ) ? $item->url : '';
		$atts['class']       = ( $item->hasChildren ) ? 'dropdown-toggle' : '';
		$atts['data-toggle'] = ( $item->hasChildren ) ? 'dropdown' : '';
		
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
		
		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value      = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}
		
		$title = apply_filters( 'the_title', $item->title, $item->ID );
		
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
		
		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	
	public function end_el( &$output, $item, $depth = 0, $args = array() ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$output .= "</li>{$n}";
	}
}
