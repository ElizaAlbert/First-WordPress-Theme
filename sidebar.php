
<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
												<label class="screen-reader-text">Sök efter:</label>
												<input type="text" />
												<input type="submit" value="Sök" />
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<ul>
											<li class="page_item current_page_item">
												<a href="">Blogg</a>
											</li>
											<li class="page_item">
												<a href="">Exempelsida</a>
											</li>
											<li class="page_item">
												<a href="">Kontakt</a>
											</li>
											<li class="page_item page_item_has_children">
												<a href="">Om mig</a>
												<ul class="children">
													<li class="page_item">
														<a href="">Intressen</a>
													</li>
													<li class="page_item page_item_has_children">
														<a href="">Portfolio</a>
														<ul class="children">
															<li class="page_item">
																<a href="">Projekt 1</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="page_item">
												<a href="">Startsida</a>
											</li>
										</ul>
									</li>
									<li>
										<h2>Arkiv</h2>
										<ul>
											<li>
												<a href="arkiv.html">oktober 2016</a>
											</li>
										</ul>
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<ul>
											<li class="cat-item">
												<a href="">Natur</a> (1)
											</li>
											<li class="cat-item">
												<a href="">Okategoriserade</a> (3)
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</aside>







<!-- <aside id="secondary" class="col-xs-12 col-md-3">
    <div id="sidebar">
        <ul>
            <li>
                <form id="searchform" class="searchform">
                    <div>

                        <?php get_search_form(); // Visar sidan med sökresultaten ?>

                    </div>
                </form>
            </li>
        </ul>
        <ul role="navigation">
            <li class="pagenav">
                <h2>Sidor</h2>
                
                <?php wp_nav_menu( array(  //Visar en navigeringsmeny
                    'theme_location' => "meny3",
                    'menu_class' => 'side-menu'
                    
                )); ?>

            </li>
            <li>
                <ul>
                    <li>
                    <?php dynamic_sidebar('unique-sidebar-id'); // Visar en sidebar och hämtar information från functions.php ?>                                        
                    </li>
                </ul>
            </li>
            <li class="categories">
                <h2>Kategorier</h2>
                <ul>

                    <li class="cat-item">
                        <?php echo get_category_link($cat); ?><?php the_category(); ?>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</aside>

            -->