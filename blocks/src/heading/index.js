import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import './style-index.scss';

registerBlockType( 'gb-addons/heading', {
	edit: Edit,
	save: () => null // dynamic block
} );
