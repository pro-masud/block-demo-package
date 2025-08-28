import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls, RichText, BlockControls, AlignmentToolbar } from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';
import './index.scss';

export default function Edit ( { attributes, setAttributes } ) {
	const { content, level, align, color, title, description, badge, btnPrimary, btnPrimaryUrl, btnOutline, btnOutlineUrl } = attributes;

	const tagName = `h${level}`;

	return (
		<>
			<BlockControls>
				<AlignmentToolbar
					value={align}
					onChange={(newAlign) => setAttributes({ align: newAlign })}
				/>
			</BlockControls>
			
			<InspectorControls>
				{/* <PanelBody title={__( 'Heading Settings', 'gb-addons' )} initialOpen={true}>
					
				</PanelBody> */}
				<PanelBody title={__('Button Settings', 'gb-addons')}>
					<TextControl
						label={__('Parmary Button URL', 'gb-addons')}
						value={btnPrimaryUrl}
						onChange={(newUrl) => setAttributes({ btnPrimaryUrl: newUrl })}
						placeholder="https://example.com"
					/>
					<TextControl
						label={__('Outline Button URL', 'gb-addons')}
						value={btnOutlineUrl}
						onChange={(newOutUrl) => setAttributes({ btnOutlineUrl: newOutUrl })}
						placeholder="https://example.com"
					/>
				</PanelBody>
			</InspectorControls>

			<div { ...useBlockProps({ className: "custom-container" }) }>
				<section className="card-grid">
					<article className="card">
						<div className="card-media">
							<img src="https://picsum.photos/600/400?random=1" alt="Sample image" />
						</div>
						<div className="card-body">
							<RichText
								tagName="h3"
								className="card-title"
								value={ title }
								onChange={(newTitle) => setAttributes({ title: newTitle })}
								placeholder={ __( 'Write card title…', 'gb-addons' ) }
								style={{ textAlign: align, color }}
							/>
							
							<RichText
								tagName="p"
								className="card-text"
								value={ description }
								onChange={(newDesc) => setAttributes({ description: newDesc })}
								placeholder={ __( 'Write card description…', 'gb-addons' ) }
							/>
							<div className="card-meta">
								<RichText
									tagName="span"
									className="badge"
									value={ badge }
									onChange={(newBadge) => setAttributes({ badge: newBadge })}
									placeholder={ __( 'Write card badge', 'gb-addons' ) }
								/>
								<span className="price">$29</span>
							</div>
							<div className="card-actions">
								<RichText
									tagName="a"
									className="btn btn-primary"
									href={btnPrimaryUrl}
									value={ btnPrimary }
									onChange={(newBtnPrimary) => setAttributes({ btnPrimary: newBtnPrimary })}
									placeholder={ __( 'Write button text', 'gb-addons' ) }
								/>
								<RichText
									tagName="a"
									className="btn btn-outline"
									href={btnOutlineUrl}
									value={ btnOutline }
									onChange={(newBtnOutline) => setAttributes({ btnOutline: newBtnOutline })}
									placeholder={ __( 'Write button text', 'gb-addons' ) }
								/>
							</div>
						</div>
					</article>
				</section>
			</div>
		</>
	);
}
