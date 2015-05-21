<?php $this->load->helper('form'); ?>
<section id="mast" class="form page__leagues">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Add League</h1>
        
            <ul class="list navigation">
        
                <li><a class="button" href="<?php echo base_url()?>leagues"><span>back</span></a></li>
            </ul>
            
        </section>
        
        <section class="page-body">
            <?php $attributes = array('class' => 'form_inline'); ?>
			 <?php 
				$leaguecode = $league['league_code'];
				if ( $leaguecode != '')
				{
					$hidden = array('league_code' => $leaguecode);
					echo form_open('leagues/update',$attributes,$hidden);
				} else {
					echo form_open('leagues/add',$attributes); 
				}
			?>        
			
<!--                <div class="field-item text">-->
                    <label for="league_name">League Name</label>
					<?php

						$leaguename = $league['league_name'];
						$input = array(
							'name' => 'league_name',
							'id'=> 'league_name',
							'value' =>"$leaguename",
							'maxlength' => 20,
							'size'=>25
						);
						echo form_input($input);
						$leaguedescription = $league['league_description'];
						$input = array(
							'name' => 'league_description',
							'id'=> 'league_description',
							'value' =>"$leaguedescription",
							'maxlength' => 40,
							'size'=>40
						);
						echo '<label for="league_name">League Description</label>';
						echo form_input($input);
					?>
<!--                </div>-->

                <?php echo form_submit('Submit','Submit','class="button"') ?>            
            <?php echo form_close(); ?>
            
        </section>
        
    </div>

</section>

