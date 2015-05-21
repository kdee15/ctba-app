<?php $this->load->helper('form'); ?>
<section id="mast" class="form page_teams">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Add Team for <?php echo $club['club_name']?></h1>
        
            <ul class="list navigation">
        
                <li><a class="button" href="<?php echo base_url()?>teams/view/<?php echo $club['club_code']?>"><span>back</span></a></li>
            </ul>
            
        </section>
        
        <section class="page-body">
			<?php $attributes = array('class' => 'form_inline'); 
				$hidden = array('club_code' => $club['club_code']);
				echo form_open('teams/create',$attributes,$hidden);
			?>  
			
			<div class="field-item text grid__quarter">
            <label for="league">Select League</label>

            <?php echo form_dropdown('league_id', $league_list);?>
               		
			</div>
			 <?php echo form_submit('Submit','Submit','class="button"') ?>            
            	<?php echo form_close(); ?>		
        </section>
        
    </div>

</section>

