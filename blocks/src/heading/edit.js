import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls, RichText, BlockControls, AlignmentToolbar } from '@wordpress/block-editor';
import { PanelBody, SelectControl } from '@wordpress/components';
import './index.scss';

export default function Edit ( { attributes, setAttributes } ) {
	const { content, level, align } = attributes;

	const tagName = `h${level}`;

	return (
		<>
			<BlockControls>
				<AlignmentToolbar
					value={align}
					onChange={( newAlign ) => setAttributes( { align: newAlign } )}
				/>
			</BlockControls>
			
			<InspectorControls>
				<PanelBody title={__( 'Heading Settings', 'gb-addons' )} initialOpen={true}>
					<SelectControl
						label={__( 'Heading Level', 'gb-addons' )}
						value={level}
						options={[
							{ label: 'H1', value: 1 },
							{ label: 'H2', value: 2 },
							{ label: 'H3', value: 3 },
							{ label: 'H4', value: 4 },
							{ label: 'H5', value: 5 },
							{ label: 'H6', value: 6 },
						]}
						onChange={( newLevel ) => setAttributes( { level: parseInt( newLevel ) } )}
					/>
					{/* <SelectControl
						label={__( 'Alignment', 'gb-addons' )}
						value={align}
						options={[
							{ label: 'Left', value: 'left' },
							{ label: 'Center', value: 'center' },
							{ label: 'Right', value: 'right' },
						]}
						onChange={( newAlign ) => setAttributes( { align: newAlign } )}
					/> */}
				</PanelBody>
			</InspectorControls>

			<RichText
				{...useBlockProps()}
				tagName={tagName}
				value={content}
				onChange={( value ) => setAttributes( { content: value } )}
				placeholder={__( 'Write heading…', 'gb-addons' )}
				style={{ textAlign: align }}
			/>
		</>
	);
}
