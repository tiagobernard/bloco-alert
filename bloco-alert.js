( function() {
	var el = wp.element.createElement,
		RichText = wp.editor.RichText;
 
	wp.blocks.registerBlockType(
		'bloco-alert/bloco-alert',
		{
			title: 'Bloco Teste',
			icon: 'admin-plugins',
			category: 'common',
 
			attributes: {
				mensagem: {
					type: 'string',
					source: 'html',
					selector: 'p',
				},
			},
 
			edit: function( props ) {
				var mensagem = props.attributes.mensagem;
				function onChangeMensagem( novoMensagem ) {
					props.setAttributes( { mensagem: novoMensagem } );
				}
 
				return el(
					RichText,
					{
						tagName: 'p',
						className: props.className,
						onChange: onChangeMensagem,
						value: mensagem,
					}
				);
			},
 
			save: function( props ) {
				return el(
					RichText.Content,
					{
						tagName: 'p',
						value: props.attributes.mensagem,
					}
				);
			},
		}
	);
}() );