<section id="mast" class="page__leagues">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Clubs</h1>
        
            <ul class="list navigation">
        
                <li><a class="button" href="clubs/create/"><span>Add Club</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">
        
            <ul class="list grid">
			<?php 
				foreach ($allclubs as $club){?>
                <li class="grid__quarter">

					<article class="card" href="clubs.php">
                        <div class="card__header"><img src="" /></div>
                        <div class="card__body">
							
						<?php echo '<h4>'.$club->club_name.'</h4>';
                           		echo '<h4>'.$club->contact.'</h4>';
							?>
							
                        </div>
                        <div class="card__footer">
                            <ul class="list grid">
                                <li class="grid__third">
                                    <?php echo '<a href="clubs/edit/'.$club->club_code.'">'?><span>Edit</span></a>
                                </li>
                                <li class="grid__third">
                                    <?php echo '<a href="Teams/view/'.$club->club_code.'">'?><span>Teams</span></a>
                                </li>						
                                <li class="grid__third">
                                    <?php echo '<a href="clubs/delete/'.$club->club_code.'"'. 'onclick="return confirm(\'Are you sure?\');">'?><span>Delete</span></a>
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
