import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import './style-index.scss';
import metadata from './block.json';

registerBlockType( metadata.name, {
	edit: Edit,
	save: () => null // dynamic block
} );
