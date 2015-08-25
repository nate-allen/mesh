<?php
/**
 * 3 Editor template
 *
 * @package MultipleContentSection
 * @subpackage AdminTemplates
 * @since 1.3.5
 */

?>
<div class="mcs-columns-4 columns">
	<div class="block" id="mcs-block-editor-<?php esc_attr_e( $blocks[0]->ID ); ?>"  data-mcs-block-id="<?php esc_attr_e( $blocks[0]->ID ); ?>">
		<div class="block-header"><?php esc_html_e( $blocks[0]->post_title ); ?></div>
		<div class="block-content">
		<?php
		wp_editor( apply_filters( 'content_edit_pre', $blocks[0]->post_content ), 'mcs-section-editor-' . $blocks[0]->ID, array(
			'textarea_name' => 'mcs-sections[' . $section->ID . '][blocks][' . $blocks[0]->ID . ']',
			'teeny' => true,
			'tinymce'          => array(
				'resize'                => false,
				'wordpress_adv_hidden'  => false,
				'add_unload_trigger'    => false,
				'statusbar'             => false,
				'autoresize_min_height' => 150,
				'wp_autoresize_on'      => false,
				'plugins'               => 'lists,media,paste,tabfocus,fullscreen,wordpress,wpautoresize,wpeditimage,wpgallery,wplink,wptextpattern,wpview',
				'toolbar1'              => 'bold,italic,bullist,numlist,blockquote,link,unlink',
			),
			'quicktags' => array(
				'buttons' => 'strong,em,link,block,del,ins,img,ul,ol,li,code,more',
			),
		) );
		?>
		</div>
	</div>
</div>

<div class="mcs-columns-4 columns">
	<div class="block" id="mcs-block-editor-<?php esc_attr_e( $blocks[1]->ID ); ?>" data-mcs-block-id="<?php esc_attr_e( $blocks[1]->ID ); ?>">
		<div class="block-header"><?php esc_html_e( $blocks[1]->post_title ); ?></div>
		<div class="block-content">
		<?php
		wp_editor( apply_filters( 'content_edit_pre', $blocks[1]->post_content ), 'mcs-section-editor-' . $blocks[1]->ID, array(
			'textarea_name' => 'mcs-sections[' . $section->ID . '][blocks][' . $blocks[1]->ID . ']',
			'teeny' => true,
			'tinymce'          => array(
				'resize'                => false,
				'wordpress_adv_hidden'  => false,
				'add_unload_trigger'    => false,
				'statusbar'             => false,
				'autoresize_min_height' => 150,
				'wp_autoresize_on'      => false,
				'plugins'               => 'lists,media,paste,tabfocus,fullscreen,wordpress,wpautoresize,wpeditimage,wpgallery,wplink,wptextpattern,wpview',
				'toolbar1'              => 'bold,italic,bullist,numlist,blockquote,link,unlink',
			),
			'quicktags' => array(
				'buttons' => 'strong,em,link,block,del,ins,img,ul,ol,li,code,more',
			),
		) );
		?>
		</div>
	</div>
</div>

<div class="mcs-columns-4 columns">
	<div class="block" id="mcs-block-editor-<?php esc_attr_e( $blocks[2]->ID ); ?>" data-mcs-block-id="<?php esc_attr_e( $blocks[2]->ID ); ?>">
		<div class="block-header"><?php esc_html_e( $blocks[2]->post_title ); ?></div>
		<div class="block-content">
			<?php
			wp_editor( apply_filters( 'content_edit_pre', $blocks[2]->post_content ), 'mcs-section-editor-' . $blocks[2]->ID, array(
				'textarea_name' => 'mcs-sections[' . $section->ID . '][blocks][' . $blocks[2]->ID . ']',
				'teeny' => true,
				'tinymce'          => array(
					'resize'                => false,
					'wordpress_adv_hidden'  => false,
					'add_unload_trigger'    => false,
					'statusbar'             => false,
					'autoresize_min_height' => 150,
					'wp_autoresize_on'      => false,
					'plugins'               => 'lists,media,paste,tabfocus,fullscreen,wordpress,wpautoresize,wpeditimage,wpgallery,wplink,wptextpattern,wpview',
					'toolbar1'              => 'bold,italic,bullist,numlist,blockquote,link,unlink',
				),
				'quicktags' => array(
					'buttons' => 'strong,em,link,block,del,ins,img,ul,ol,li,code,more',
				),
			) );
			?>
		</div>
	</div>
</div>