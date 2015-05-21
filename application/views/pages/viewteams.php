<section id="mast" class="page__leagues">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Teams for <?php echo $club['club_name']?></h1>
        
            <ul class="list navigation">
        		<li><a class="button" href=<?php echo base_url(). "clubs"?>><span>Clubs</span></a></li>
                <li><a class="button" href=<?php echo base_url(). "teams/add/"?><?php echo $clubid?>"><span>Add Team</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">
        
            <ul class="list grid">
				<?php 
					if (count($teams) ) {
						foreach ($teams as $team){ ?>
                <li class="grid__quarter">

					<article class="card" href="clubs.php">
                        <div class="card__header"><img src="" /></div>
                        <div class="card__body">
							
						<?php echo '<h4>'.$team->club_name.'</h4>';
                           		echo '<h4>'.$team->league_name.'</h4>';
							?>
							
                        </div>
                        <div class="card__footer">
                            <ul class="list grid">
                                <li class="grid__third">
                                    <?php echo '<a href="players/edit/'.$team->team_code.'">'?><span>Players</span></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </li>
	<?php } } ?>
            </ul>
            
        </section>
        
    </div>

</section>
