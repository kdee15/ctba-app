<?php $this->load->helper('form'); ?>
<section id="mast" class="page__clubs">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Edit Club</h1>
        
            <ul class="list navigation">
        
                <li><a class="button" href="<?php echo base_url()?>clubs"><span>back</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">
        
			       <section class="page-body">
             <?php $attributes = array('class' => 'form_inline'); ?>
			 <?php 
				$clubcode = $club['club_code'];
				if ( $clubcode != '')
				{
					$hidden = array('club_code' => $clubcode);
					echo form_open('clubs/update',$attributes,$hidden);
				} else {
					echo form_open('clubs/add',$attributes); 
				}
			?>    

                <div class="field-item text">
				<?php
						$clubname = $club['club_name'];
						$input = array(
							'name' => 'club_name',
							'id'=> 'club_name',
							'value' =>"$clubname",
							'maxlength' => 20,
							'size'=>25
						);	
				?>
                 <label for="club_name">Club Name</label>
                 <?php echo form_input($input); ?>   
                </div>

                <div class="field-item text">
				<?php
						$contact = $club['contact'];
						$input = array(
							'name' => 'contact',
							'id'=> 'contact',
							'value' =>"$contact",
							'maxlength' => 20,
							'size'=>25
						);	
				?>
                 <label for="contact">Club Contact</label>
                 <?php echo form_input($input); ?>   
                </div>

                <div class="field-item text">
				<?php
						$contact_tel = $club['contact_tel'];
						$input = array(
							'name' => 'contact_tel',
							'id'=> 'contact_tel',
							'value' =>"$contact_tel",
							'maxlength' => 20,
							'size'=>25
						);	
				?>
                 <label for="contact">Telephone number</label>
                 <?php echo form_input($input); ?>   
                </div>

                <div class="field-item text">
				<?php
						$contact_fax = $club['contact_fax'];
						$input = array(
							'name' => 'contact_fax',
							'id'=> 'contact_fax',
							'value' =>"$contact_fax",
							'maxlength' => 20,
							'size'=>25
						);	
				?>
                 <label for="contact">Fax number</label>
                 <?php echo form_input($input); ?>   
                </div>

                <div class="field-item text">
				<?php
						$email_addr = $club['email_addr'];
						$input = array(
							'name' => 'email_addr',
							'id'=> 'email_addr',
							'value' =>"$email_addr",
							'maxlength' => 20,
							'size'=>25
						);	
				?>
                 <label for="contact">Email Address</label>
                 <?php echo form_input($input); ?>   
                </div>

                <div class="field-item text">
                    <label for="club-name">Club Address</label>
				<?php
						$address_line1 = $club['address_line1'];
						$input = array(
							'name' => 'address_line1',
							'id'=> 'address_line1',
							'value' =>"$address_line1",
							'maxlength' => 20,
							'size'=>25
						);	
				?>
                 <?php echo form_input($input); ?> 					

				<?php
						$address_line2 = $club['address_line2'];
						$input = array(
							'name' => 'address_line2',
							'id'=> 'address_line2',
							'value' =>"$address_line2",
							'maxlength' => 20,
							'size'=>25
						);	
				?>
                 <?php echo form_input($input); ?> 	

									<?php
						$address_line3 = $club['address_line3'];
						$input = array(
							'name' => 'address_line3',
							'id'=> 'address_line3',
							'value' =>"$address_line3",
							'maxlength' => 20,
							'size'=>25
						);	
				?>
                 <?php echo form_input($input); ?> 	
					
				<?php
						$address_line4 = $club['address_line4'];
						$input = array(
							'name' => 'address_line4',
							'id'=> 'address_line4',
							'value' =>"$address_line4",
							'maxlength' => 20,
							'size'=>25
						);	
				?>
                 <?php echo form_input($input); ?> 	
                </div>

                <div class="field-item text">
				<?php
						$home_colors = $club['home_colors'];
						$input = array(
							'name' => 'home_colors',
							'id'=> 'home_colors',
							'value' =>"$home_colors",
							'maxlength' => 20,
							'size'=>25
						);	
				?>
                 <label for="contact">Club Colors - Home</label>
                 <?php echo form_input($input); ?>   
                </div>
					   

                <div class="field-item text">
				<?php
						$away_colors = $club['away_colors'];
						$input = array(
							'name' => 'away_colors',
							'id'=> 'away_colors',
							'value' =>"$away_colors",
							'maxlength' => 20,
							'size'=>25
						);	
				?>
                 <label for="contact">Club Colors - Away</label>
                 <?php echo form_input($input); ?>   
                </div>
					   
                <?php echo form_submit('Submit','Submit','class="button"') ?>            
            	<?php echo form_close(); ?>
					   
                
            </form>
            
        </section>
        
    </div>

</section>