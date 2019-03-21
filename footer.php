		<div class="clear"></div>

		<footer id="footer" role="contentinfo" class="footer">
			<div class="center">

				<div class="bloco-flex">

					<!-- Sobre nós -->
					<div class="bloco-content"> 
						<div class="titulos-footer"><h1><a href="<?php echo get_page_link(14); ?>">Sobre nós</a></h1></div>
						<div class="textos-footer">
							<?php
								$id_page_sobre = 14;
								$resumo = get_field( "resumo_sobre_nos", $id_page_sobre );
								echo $resumo;
							?>
						</div>
					</div>

					<!-- Pesquisar por areas -->
					<div class="bloco-content"> 
						<div class="titulos-footer"><h2>Pesquisar por áreas</h2></div>

						<div class="textos-footer textos-default">


								<?php

									$terms = get_terms( array(
									    'taxonomy' 		=> 'taxonomy_bairro_imoveis',
									    'hide_empty' 	=> false,
									    'number' => 12, 
										'orderby' => 'count', 
										'order' => 'DESC', 
									) );

									if ( $terms != null ){
										foreach ( $terms as $term ) {
									        echo '<li><a href="' . esc_url( get_term_link( $term ) ) . '">' . $term->name . '</a></li>';
									    }
									}							
								
							?>
						</div>
					</div>

					<!-- Endereços e telefones -->
					<div class="bloco-content"> 
						<div class="titulos-footer"><h3><a href="<?php echo get_page_link(25); ?>">Fale Conosco</a></h3></div>
						
						<div class="textos-footer textos-default">
							<div class="bloco-flex-footer">
								<div class="icon-footer">
									<!-- Endereço -->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="17px" height="17px" viewBox="0 0 612 612" style="margin-top: 1px;" xml:space="preserve">
										<g>
											<path d="M516.316,337.52l94.233,193.581c3.832,7.873-0.196,14.314-8.952,14.314H10.402c-8.756,0-12.785-6.441-8.952-14.314   L95.684,337.52c1.499-3.079,5.528-5.599,8.952-5.599h80.801c2.49,0,5.853,1.559,7.483,3.442   c5.482,6.335,11.066,12.524,16.634,18.65c5.288,5.815,10.604,11.706,15.878,17.735h-95.891c-3.425,0-7.454,2.519-8.952,5.599   L58.163,505.589h495.67l-62.421-128.242c-1.498-3.08-5.527-5.599-8.953-5.599h-96.108c5.273-6.029,10.591-11.92,15.879-17.735   c5.585-6.144,11.2-12.321,16.695-18.658c1.628-1.878,4.984-3.434,7.47-3.434h80.971   C510.789,331.921,514.817,334.439,516.316,337.52z M444.541,205.228c0,105.776-88.058,125.614-129.472,227.265   c-3.365,8.26-14.994,8.218-18.36-0.04c-37.359-91.651-112.638-116.784-127.041-198.432   c-14.181-80.379,41.471-159.115,122.729-166.796C375.037,59.413,444.541,124.204,444.541,205.228z M379.114,205.228   c0-40.436-32.779-73.216-73.216-73.216s-73.216,32.78-73.216,73.216c0,40.437,32.779,73.216,73.216,73.216   S379.114,245.665,379.114,205.228z" fill="#666666"/>
										</g>

									</svg>
								</div>

								<div>
									<?php $id_page_contato = 25; ?>
									<?php the_field('rua_imobiliaria', $id_page_contato ); ?>, <?php the_field('numero_imobiliaria', $id_page_contato ); ?><br>
									<?php the_field('bairro_imobiliaria', $id_page_contato ); ?> - 
									<?php the_field('cidade_imobiliaria', $id_page_contato ); ?><br>
									Cep: <?php the_field('cep_imobiliaria_campos', $id_page_contato ); ?>
									
									<br>
								</div>
							</div>

							<div class="bloco-flex-footer">
								<div class="icon-footer">
									<!-- Telefone -->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 241.73 241.73" style="enable-background:new 0 0 241.73 241.73; margin-top: 3px;" xml:space="preserve" width="15px" height="15px">
									<g>
										<path d="M234.771,181.213l-34.938-34.953c-4.692-4.668-10.975-7.24-17.689-7.24   c-6.987,0-13.584,2.751-18.572,7.742l-13.6,13.597c-10.568-5.874-24.614-13.953-39.197-28.536   c-14.566-14.571-22.646-28.576-28.55-39.201l13.613-13.603c10.121-10.142,10.328-26.413,0.463-36.269L61.37,7.818   c-4.679-4.692-10.962-7.276-17.693-7.276c-6.831,0-13.293,2.63-18.252,7.417c-3,2.416-18.055,15.706-23.666,43.114   c-7.856,38.363,10.194,75.274,62.302,127.403c58.209,58.191,107.902,62.714,121.746,62.714c2.882,0,4.621-0.178,5.085-0.232   c27.147-3.182,36.867-15.238,43.964-24.041C244.052,205.508,244.02,190.496,234.771,181.213z M223.178,207.502   c-6.671,8.274-12.971,16.088-34.031,18.557c-0.011,0.001-1.163,0.13-3.34,0.13c-12.386,0-57.008-4.206-111.139-58.32   C26.615,119.796,9.749,86.829,16.454,54.081c4.894-23.906,17.887-34.067,18.392-34.453l0.448-0.331l0.393-0.394   c2.169-2.167,5.006-3.361,7.989-3.361c2.716,0,5.228,1.018,7.08,2.876l34.939,34.94c4.02,4.016,3.806,10.774-0.471,15.06   L69.829,83.8l-0.253,0.265c-4.012,4.419-3.54,10.391-1.33,14.28c6.377,11.508,15.112,27.269,31.92,44.082   c16.752,16.752,32.49,25.48,43.966,31.845c1.149,0.645,3.521,1.727,6.49,1.727c3.506,0,6.725-1.484,9.108-4.189l14.448-14.444   c2.157-2.158,4.985-3.347,7.964-3.347c2.722,0,5.247,1.021,7.095,2.859l34.915,34.93   C228.587,196.259,226.756,203.064,223.178,207.502z" fill="#666666"/>
										<path d="M146.447,37.293c12.887,1.483,28.061,9.289,38.657,19.886c10.695,10.695,18.52,26.023,19.933,39.05   c0.417,3.843,3.667,6.691,7.447,6.691c0.27,0,0.544-0.015,0.818-0.044c4.118-0.447,7.094-4.147,6.647-8.265   c-1.787-16.467-11.075-34.874-24.238-48.038c-13.04-13.041-31.259-22.306-47.549-24.181c-4.113-0.477-7.834,2.479-8.308,6.593   C139.38,33.099,142.331,36.819,146.447,37.293z" fill="#666666"/>
										<path d="M139.44,68.711c6.97,0.803,16.616,5.973,22.935,12.292c6.373,6.374,11.553,16.112,12.316,23.157   c0.417,3.844,3.667,6.692,7.447,6.692c0.27,0,0.543-0.015,0.817-0.044c4.118-0.447,7.095-4.147,6.648-8.265   c-1.304-12.028-9.289-24.813-16.623-32.147c-7.268-7.269-19.928-15.216-31.825-16.587c-4.119-0.479-7.835,2.478-8.309,6.592   C132.373,64.516,135.325,68.237,139.44,68.711z" fill="#666666"/>
									</g>
									</svg>
								</div>

								<div>
									<div class="contato-aluguel">
										<div class="titulos-contato">Para Alugar</div>
										<?php

											if( have_rows('telefones_aluguel_imobiliaria', $id_page_contato ) ):
											    while ( have_rows('telefones_aluguel_imobiliaria', $id_page_contato ) ) : the_row();

											        echo '<a class="tel-footer" href="tel:' . get_sub_field('telefone_aluguel') . '">' . the_sub_field('telefone_aluguel') . '</a>';
											    endwhile;
											endif;
										?>
									</div>
								</div>
							</div> 

							<div class="bloco-flex-footer">
								<div class="icon-footer">
									<!-- Telefone -->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 241.73 241.73" style="enable-background:new 0 0 241.73 241.73; margin-top: 3px;" xml:space="preserve" width="15px" height="15px">
									<g>
										<path d="M234.771,181.213l-34.938-34.953c-4.692-4.668-10.975-7.24-17.689-7.24   c-6.987,0-13.584,2.751-18.572,7.742l-13.6,13.597c-10.568-5.874-24.614-13.953-39.197-28.536   c-14.566-14.571-22.646-28.576-28.55-39.201l13.613-13.603c10.121-10.142,10.328-26.413,0.463-36.269L61.37,7.818   c-4.679-4.692-10.962-7.276-17.693-7.276c-6.831,0-13.293,2.63-18.252,7.417c-3,2.416-18.055,15.706-23.666,43.114   c-7.856,38.363,10.194,75.274,62.302,127.403c58.209,58.191,107.902,62.714,121.746,62.714c2.882,0,4.621-0.178,5.085-0.232   c27.147-3.182,36.867-15.238,43.964-24.041C244.052,205.508,244.02,190.496,234.771,181.213z M223.178,207.502   c-6.671,8.274-12.971,16.088-34.031,18.557c-0.011,0.001-1.163,0.13-3.34,0.13c-12.386,0-57.008-4.206-111.139-58.32   C26.615,119.796,9.749,86.829,16.454,54.081c4.894-23.906,17.887-34.067,18.392-34.453l0.448-0.331l0.393-0.394   c2.169-2.167,5.006-3.361,7.989-3.361c2.716,0,5.228,1.018,7.08,2.876l34.939,34.94c4.02,4.016,3.806,10.774-0.471,15.06   L69.829,83.8l-0.253,0.265c-4.012,4.419-3.54,10.391-1.33,14.28c6.377,11.508,15.112,27.269,31.92,44.082   c16.752,16.752,32.49,25.48,43.966,31.845c1.149,0.645,3.521,1.727,6.49,1.727c3.506,0,6.725-1.484,9.108-4.189l14.448-14.444   c2.157-2.158,4.985-3.347,7.964-3.347c2.722,0,5.247,1.021,7.095,2.859l34.915,34.93   C228.587,196.259,226.756,203.064,223.178,207.502z" fill="#666666"/>
										<path d="M146.447,37.293c12.887,1.483,28.061,9.289,38.657,19.886c10.695,10.695,18.52,26.023,19.933,39.05   c0.417,3.843,3.667,6.691,7.447,6.691c0.27,0,0.544-0.015,0.818-0.044c4.118-0.447,7.094-4.147,6.647-8.265   c-1.787-16.467-11.075-34.874-24.238-48.038c-13.04-13.041-31.259-22.306-47.549-24.181c-4.113-0.477-7.834,2.479-8.308,6.593   C139.38,33.099,142.331,36.819,146.447,37.293z" fill="#666666"/>
										<path d="M139.44,68.711c6.97,0.803,16.616,5.973,22.935,12.292c6.373,6.374,11.553,16.112,12.316,23.157   c0.417,3.844,3.667,6.692,7.447,6.692c0.27,0,0.543-0.015,0.817-0.044c4.118-0.447,7.095-4.147,6.648-8.265   c-1.304-12.028-9.289-24.813-16.623-32.147c-7.268-7.269-19.928-15.216-31.825-16.587c-4.119-0.479-7.835,2.478-8.309,6.592   C132.373,64.516,135.325,68.237,139.44,68.711z" fill="#666666"/>
									</g>
									</svg>
								</div>

								<div>
 									<div class="contato-venda">
										<div class="titulos-contato">Para comprar</div>
										<?php

											if( have_rows('telefones_venda_imobiliaria', $id_page_contato ) ):
											    while ( have_rows('telefones_venda_imobiliaria', $id_page_contato ) ) : the_row();

											        echo '<a class="tel-footer" href="tel:' . get_sub_field('telefone_venda') . '">' . the_sub_field('telefone_venda') . '</a>';
											    endwhile;
											endif;
										?>
									</div>
								</div>
							</div>   

							<div class="bloco-flex-footer">
								<div class="icon-footer">
									<!-- Atendimento: -->
									<svg style="margin-top:2px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 129 129" enable-background="new 0 0 129 129" width="17px" height="17px">
									  <g>
									    <g>
									      <path d="M64.5,122.3c32,0,57.9-26,57.9-57.9c0-32-26-57.9-57.9-57.9S6.6,32.4,6.6,64.4C6.6,96.3,32.5,122.3,64.5,122.3z     M64.5,14.6c27.5,0,49.8,22.3,49.8,49.8c0,27.5-22.3,49.8-49.8,49.8S14.7,91.8,14.7,64.4C14.7,36.9,37,14.6,64.5,14.6z" fill="#666666"/>
									      <path d="m61.8,71.2h19.3c2.3,0 4.1-1.8 4.1-4.1 0-2.3-1.8-4.1-4.1-4.1h-15.2v-23.8c0-2.3-1.8-4.1-4.1-4.1s-4.1,1.8-4.1,4.1v27.9c0,2.3 1.8,4.1 4.1,4.1z" fill="#666666"/>
									    </g>
									  </g>
									</svg>

								</div>

								<div>		 
									<?php the_field('atendimento_imobiliária', $id_page_contato ); ?>
								</div>
							</div>

						</div>
					</div>

					<div class="bloco-content"> 
						<div class="titulos-footer"><h4>Curta nossa página</h4></div>
						<div class="fb-page" data-href="https://www.facebook.com/camposempreendimentosimobiliarios/?fref=ts" style="margin-top: 30px" data-tabs="timeline" data-height="240" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/camposempreendimentosimobiliarios/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/camposempreendimentosimobiliarios/?fref=ts">Campos Imobiliária</a></blockquote></div>

					</div>
				</div>

				<div class="bloco-flex copyright">
					<div> Copyright © <?php echo date("Y"); ?> Todos os direitos reservados</div>
					<a href="http://www.aigen.com.br" target="_blank" name="Aigen - Soluções Web" class="aigen">
						<img src="<?php bloginfo('template_directory'); ?>/dist/images/logo-aigen.png" alt="Aigen - Soluções Web">
					</a>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>

		<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery('.galeria-imoveis .slider-for').slick({
				    slidesToShow: 1,
				    slidesToScroll: 1,
				    fade: false,
				    asNavFor: '.galeria-imoveis .slider-nav',
				    dots: false,
				    arrows:true,    
				    appendArrows: '.pr_images',
				    prevArrow:'<i class="fa fa-angle-left slick-prev"></i>',
				    nextArrow:'<i class="fa fa-angle-right slick-next"></i>',
				    adaptiveHeight: true,
				});
				jQuery('.galeria-imoveis .slider-nav').slick({
				    slidesToShow: 3,
				    slidesToScroll: 1,
				    asNavFor: '.galeria-imoveis .slider-for',
				    dots: false,
				    arrows:false,
				    centerMode: false,
				    focusOnSelect: true,
				    adaptiveHeight: true
				});
			});
		</script>
	</div>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-96754828-1', 'auto');
	  ga('send', 'pageview');
	</script>
	</body>
</html>