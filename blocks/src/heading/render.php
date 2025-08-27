<?php
$content = sanitize_text_field( $attributes['content'] ) ?? '';
$tag     = 'h' . ( intval( $attributes['level'] ) ?? 1 );
$align     = sanitize_text_field( $attributes['align'] ) ?? 'left';
echo sprintf(
	'<%1$s style="text-align: %3$s">%2$s</%1$s>',
	$tag,
	esc_html( $content ),
	esc_attr( $align )
);