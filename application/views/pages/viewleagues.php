<section id="mast" class="page__leagues">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Leagues</h1>
        
            <ul class="list navigation">
        
                <li><a class="button" href="leagues/create/"><span>Add League</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">
        
            <ul class="list grid">
			<?php 
				foreach ($allleagues as $league){?>
                <li class="grid__quarter">

					<article class="card" href="leagues.php">
                        <div class="card__header"><img src="" /></div>
                        <div class="card__body">
							
						<?php echo '<h4>'.$league->league_name.'</h4>';
                           		echo '<h4>'.$league->league_description.'</h4>';
							?>
							
                        </div>
                        <div class="card__footer">
                            <ul class="list grid">
                                <li class="grid__half">
                                    <?php echo '<a href="leagues/edit/'.$league->league_code.'">'?><span>Edit</span></a>
                                </li>
                                <li class="grid__half">
                                    <?php echo '<a href="leagues/delete/'.$league->league_code.'"'. 'onclick="return confirm(\'Are you sure?\');">'?><span>Delete</span></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </li>
					<?php } ?>
            </ul>
            
        </section>
        
    </div>

</section>
