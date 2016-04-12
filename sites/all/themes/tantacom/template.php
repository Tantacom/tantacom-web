<?php
/*
 *   This function creates the body classes that are relative to each page
 *
 *  @param $vars
 *    A sequential array of variables to pass to the theme template.
 *  @param $hook
 *    The name of the theme function being called ("page" in this case.)
 */
function tantacom_preprocess_page( &$vars, $hook ) {
 /*if( ($vars['is_front']) && is_mobile() ){
        drupal_goto( variable_get( 'redirect_url', 'http://www.tantacom.com/presentacion' ) );
    }
*/	
//Esto es para cargar los js en las páginas correctas
$vars['scripts'] .= '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
$vars['scripts'] .= '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>';
$vars['scripts'] .= '<script src="/' . drupal_get_path( 'theme', 'tantacom' ) . '/js/shadowbox.js" type="text/javascript"></script>';
$vars['scripts'] .= '<script src="/' . drupal_get_path( 'theme', 'tantacom' ) . '/js/jquery.jcarousel.min.js" type="text/javascript"></script>';
$vars['scripts'] .= '<script src="/' . drupal_get_path( 'theme', 'tantacom' ) . '/js/common.js" type="text/javascript"></script>';
$vars['scripts'] .= '<script src="/' . drupal_get_path( 'theme', 'tantacom' ) . '/js/jquery.flexslider-min.js" type="text/javascript"></script>';
if(($vars["node"]->type == 'clientes') &&($vars["node"]->field_fotoproyecto[0]['view']!='')){
	$vars['scripts'] .= '<script src="/' . drupal_get_path( 'theme', 'tantacom' ) . '/js/galleria/galleria-1.2.8.min.js" type="text/javascript"></script>';
	$vars['scripts'] .= '<script src="/' . drupal_get_path( 'theme', 'tantacom' ) . '/js/galleria/galleriatanta.js" type="text/javascript"></script>';
}
$block = module_invoke('block', 'block', 'view', '12');
$vars['left']= $block['content'];


    // Don't display empty help from node_help( ).
    if ( $vars[ 'help' ] ==  "<div class=\"help\"><p></p>\n</div>" ){
         $vars[ 'help' ] ='';
    }

    // Classes for body element. Allows advanced theming based on context
    // (home page, node of certain type, etc.)

    if ( !empty($vars['primary_links'] ) or !empty($vars['secondary_links'] ) )    {
        $body_classes[] = 'with-navigation';
    }
    if ( !empty ($vars['secondary_links'] ) ) {
        $body_classes[] = 'with-secondary';
    }
    if ( module_exists ( 'taxonomy' ) && $vars[ 'node' ]->nid )     {
        foreach ( taxonomy_node_get_terms ( $vars[ 'node' ] ) as $term )    {
            $body_classes [] = 'tax-' .eregi_replace ( '[^a-z0-9]', '-', $term->name );
        }
    }
    if ( ! $vars[ 'is_front' ] ) {
        // Add unique classes for each page and website section
        $path = drupal_get_path_alias ( $_GET[ 'q' ] );
        list ( $section, ) = explode ( '/', $path, 2 );
        $body_classes[] = tantacom_id_safe ( 'page-'. $path );
        $body_classes[] = tantacom_id_safe ( 'section-'. $section );

        if ( arg ( 0 )==  'node' ){
            if ( arg ( 1 )==  'add' ){
                if ( $section ==  'node' ){
                    // Remove 'section-node'
                    array_pop ( $body_classes );
                }
                // Add 'section-node-add'
                $body_classes[] = 'section-node-add';
            }
            elseif ( is_numeric ( arg ( 1 ) ) && ( arg ( 2 ) == 'edit' || arg ( 2 ) == 'delete' ) ) {
                if ( $section == 'node'){
                    // Remove 'section-node'
                    array_pop ( $body_classes );
                }
                // Add 'section-node-edit' or 'section-node-delete'
                $body_classes[] = 'section-node-'. arg( 2 );
            }
        }

		
		
		
        //Modificando orden de title 'Tanta | Home' en vez de 'Home | Tanta'
        if ( drupal_get_title ( ) ){
            //$head_title = array ( variable_get ( 'site_name', 'Tanta' ), strip_tags ( drupal_get_title ( ) ) );
			$head_title = array (strip_tags (titulo($vars)));
			
			
	    }
        else {
			$head_title = array ( variable_get ( 'site_name', 'Tanta' ) );
            if(variable_get('site_slogan', '')){
                $head_title[] = variable_get ( 'site_slogan', '' );
			}
        }
		$vars['head_title'] = implode($head_title, ' | ' );
	}
   

    /* Add template suggestions based on content type
    * You can use a different page template depending on the
    * content type or the node ID
    * For example, if you wish to have a different page template
    * for the story content type, just create a page template called
    * page-type-story.tpl.php
    * For a specific node, use the node ID in the name of the page template
    * like this : page-node-22.tpl.php (if the node ID is 22)
    */

  
    // Concatenate with spaces
    $vars[ 'body_classes' ] = implode( ' ', $body_classes );
}

/*
 *   This function creates the NODES classes, like 'node-unpublished' for nodes
 *   that are not published, or 'node-mine' for node posted by the connected user...
 *
 *  @param $vars
 *    A sequential array of variables to pass to the theme template.
 *  @param $hook
 *    The name of the theme function being called ("node" in this case.)
 */

 
function titulo(&$vars)
{

	if ($vars["node"]->field_titulohead[0]["value"] =="")
	{
		$final = drupal_get_title ( );
	}
	else
	{
		$final = $vars["node"]->field_titulohead[0]["value"];
	}

	return ($final);
} 
 
function tantacom_preprocess_node ( &$vars, $hook ) {
	
  // Special classes for nodes
  $classes = array ( 'node' );
    if ( $vars[ 'sticky' ] ) {
    $classes[] = 'sticky';
  }
  // support for Skinr Module
    if ( module_exists ( 'skinr' ) )    {
        $classes[] = $vars[ 'skinr' ];
  }
    if ( ! $vars[ 'status' ] ){
        $classes[] = 'node-unpublished';
        $vars['unpublished'] = TRUE;
  }
    else {
        $vars['unpublished'] = FALSE;
  }
    if ( $vars['uid'] && $vars['uid'] == $GLOBALS['user']->uid ){
        // Node is authored by current user.
        $classes[] = 'node-mine';
  }
    if ( $vars[ 'teaser' ] ) {
    // Node is displayed as teaser.
        $classes[] = 'node-teaser';
  }
        $classes[] = 'clearfix';

  // Class for node type: "node-type-page", "node-type-story", "node-type-my-custom-type", etc.
    $classes[] = tantacom_id_safe ( 'node-type-' . $vars[ 'type' ]);
  // Concatenate with spaces
    $vars['classes'] = implode(' ', $classes);
	 if ( $vars['node']->nid !=  '' ){
        $vars['template_files'][] ='node-' . $vars[ 'node' ]->nid;
         //$var[ 'node' ] = $node
    }
if(arg(0) == 'taxonomy'){
    $suggestions = array('node-taxonomy');
    $vars['template_files'] = array_merge($vars['template_files'], $suggestions);
  }
 }


/*
 *  This function create the EDIT LINKS for blocks and menus blocks.
 *  When overing a block (except in IE6), some links appear to edit
 *  or configure the block. You can then edit the block, and once you are
 *  done, brought back to the first page.
 *
 * @param $vars
 *   A sequential array of variables to pass to the theme template.
 * @param $hook
 *   The name of the theme function being called ("block" in this case.)
 */

function tantacom_preprocess_block ( &$vars, $hook ) {
    $block = $vars[ 'block' ];
    // special block classes
    $classes=array( 'block' );
    $classes[] = tantacom_id_safe('block-' . $vars[ 'block' ]->module );
    $classes[] = tantacom_id_safe('block-' . $vars[ 'block' ]->region );
    $classes[] = tantacom_id_safe('block-id-' . $vars[ 'block' ]->bid );
    $classes[] = 'clearfix';

    // support for Skinr Module
    if ( module_exists ( 'skinr' ) )    {
    	$classes[] = $vars[ 'skinr' ];
    }

    // Concatenate with spaces
    $vars[ 'block_classes' ] = implode(' ', $classes );

    if ( theme_get_setting ( 'tantacom_block_editing' ) && user_access ( 'administer blocks' ) )    {
        // Display 'edit block' for custom blocks.
        if ( $block->module                 ==  'block' )   {
            $edit_links[ ]                  =   l ( '<span>' . t ( 'edit block' ) . '</span>', 'admin/build/block/configure/' .
                                                $block->module . '/' . $block->delta                                        ,
                                                    array (
                                                        'attributes'    =>  array (
                                                            'title'     =>  t ( 'edit the content of this block' )          ,
                                                            'class'     =>  'block-edit'                                    ,
                                                        )                                                                   ,
                                                        'query'         =>  drupal_get_destination ( )                      ,
                                                        'html'          =>  TRUE                                            ,
                                                    )
                                                );
        }

        // Display 'configure' for other blocks.
        else    {
            $edit_links[ ]                  =   l ( '<span>' . t ( 'configure' ) . '</span>', 'admin/build/block/configure/' .
                                                $block->module . '/' . $block->delta                                        ,
                                                    array (
                                                        'attributes'    =>  array (
                                                            'title'     =>  t ( 'configure this block' )                    ,
                                                            'class'     =>  'block-config'                                  ,
                                                            )                                                               ,
                                                        'query'         =>  drupal_get_destination( )                       ,
                                                        'html'          =>  TRUE                                            ,
                                                    )
                                                ) ;
        }

        // Display 'edit menu' for Menu blocks.
        if ( ( $block->module == 'menu' || ( $block->module == 'user' && $block->delta == 1 ) ) && user_access ( 'administer menu' ) ) {
            $menu_name                      =   ( $block->module == 'user' ) ? 'navigation' : $block->delta     ;
            $edit_links[ ]                  =   l ( '<span>' . t ( 'edit menu' ) . '</span>', 'admin/build/menu-customize/' .
                                                $menu_name                                                                  ,
                                                    array(
                                                        'attributes'    =>  array (
                                                        'title'         =>  t ( 'edit the menu that defines this block' )   ,
                                                        'class'         => 'block-edit-menu'                                ,
                                                        )                                                                   ,
                                                    'query'             => drupal_get_destination( )                        ,
                                                    'html'              => TRUE                                             ,
                                                    )
                                                )   ;
        }
        // Display 'edit menu' for Menu block blocks.
        elseif ( $block->module             == 'menu_block' && user_access ( 'administer menu' ) )  {
            list ($menu_name, )             =   split ( ':', variable_get ( "menu_block_{$block->delta}_parent", 'navigation:0' ) )     ;
            $edit_links[ ]                  =   l ( '<span>' . t ( 'edit menu' ) . '</span>', 'admin/build/menu-customize/' .
                                                $menu_name                                                                  ,
                                                array(
                                                    'attributes' => array(
                                                        'title' => t ( 'edit the menu that defines this block' )            ,
                                                        'class' => 'block-edit-menu'                                        ,
                                                        )                                                                   ,
                                                    'query' => drupal_get_destination( )                                    ,
                                                    'html' => TRUE                                                          ,
                                                    )
                                                )                                                                           ;
        }
        $vars[ 'edit_links_array' ]         =   $edit_links ;
        $vars[ 'edit_links' ]               =   '<div class="edit">' . implode ( ' ', $edit_links ) . '</div>' ;
    }
  }



/*
 *  Customize the PRIMARY and SECONDARY LINKS, to allow the admin tabs to work on all browsers
 *  An implementation of theme_menu_item_link( )
 *
 *  @param $link
 *    array The menu item to render.
 *  @return
 *    string The rendered menu item.
 */

function tantacom_menu_item_link ( $link ) {
	
    if ( empty ( $link[ 'localized_options' ] ) )   {
        $link[ 'localized_options' ]=array( ) ;
    }

    // If an item is a LOCAL TASK, render it as a tab
    if ( $link['type']& MENU_IS_LOCAL_TASK ){
        $link['title'] = '<span class="tab">'.check_plain ( $link[ 'title' ] ).'</span>';
        $link['localized_options']['html'] = TRUE;
    }

    return l ( $link[ 'title' ], $link[ 'href' ], $link[ 'localized_options' ] );
}



/*
 *  Converts a string to a suitable html ID attribute.
 *  - Ensure an ID starts with an alpha character by optionally adding an 'n'.
 *  - Replaces any character except A-Z, numbers, and underscores with dashes.
 *  - Converts entire string to lowercase.
 */

function tantacom_id_safe ( $string ) {
    // Replace with dashes anything that isn't A-Z, numbers, dashes, or underscores.
    $string = strtolower ( preg_replace( '/[^a-zA-Z0-9_-]+/', '-', $string ) );
    // If the first character is not a-z, add 'n' in front.
    if ( !ctype_lower ( $string{0} ) )  {
        // Don't use ctype_alpha since its locale aware.
        $string = 'id'. $string;
    }
    return $string;
}

//Personalizando breadcrumb
function tantacom_breadcrumb ( $breadcrumb ) {
    $breadc=NULL;
    $breadc2 = $breadcrumb[0];
    unset ($breadcrumb[0]);
    $breadcrumb = array_values($breadcrumb);

    if (!empty($breadcrumb))  {
        $breadc = '<nav class="breadcrumb"><ul>';
        $max  = sizeof ( $breadcrumb )- 1;

        if ($max == 0) : $breadc.='<li><span>' . strip_tags ( drupal_get_title ( ) ) . '</span></li>';
        else :
            $breadc .= '<li>'.$breadcrumb[0].'</li> ';
            for ( $i = 1 ; $i < $max ; $i++ )   {
                $breadc.=  '<li>/ '. $breadcrumb [ $i ] . '</li> ';
            }
            $breadc.=  '<li><span>/ ' . strip_tags ( drupal_get_title ( ) ) . '</span></li>';

        endif;
        $breadc.='</ul></nav>';
        return $breadc;
  }
  else {
      //para todos los que cuelguen de inicio menos inicio
        if ( ! ( drupal_get_title ()  == 'Inicio' ) ) {
        $salida  = '<nav class="breadcrumb"><ul>' ;
        $salida .= '<li><span>' . strip_tags ( drupal_get_title ( ) ) . '</span></li> ' ;
        $salida .= '</ul></nav>' ;
        return $salida ;
    }
  }
}

function tantacom_taxonomy_term_page($tids, $result) {

  // Add CSS from taxonomy module
  drupal_add_css(drupal_get_path('module', 'taxonomy') .'/taxonomy.css');

  // Display description for single term only
  if (count($tids) == 1) {
    $term = taxonomy_get_term($tids[0]);
    $description = $term->description;

    // Check that description exists
    if (!empty($description)) {
      $output = '<h3>';
      $output .= filter_xss_admin($description);
      $output .= '</h3>';
    }
  }

  $output .= taxonomy_render_nodes($result);

  return $output;
}

function tantacom_captcha($element) {
  /*if (!empty($element['#description']) && isset($element['captcha_widgets'])) {
    $fieldset = array(
      '#type' => 'fieldset',
      '#title' => t('CAPTCHA'),
      '#description' => $element['#description'],
      '#children' => $element['#children'],
      '#attributes' => array('class' => 'captcha'),
    );
    return theme('fieldset', $fieldset);
  }
  else {*/
    return '<div class="captcha"><p class="">'.$element['#description'].'</p>'. $element['#children'] .'</div>';
 /* }*/
}