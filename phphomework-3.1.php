<?php echo form_open('user/valid_register_page', 'autocomplete="off"');?>

    <?php $this->table->set_template(array('table_open'=>'<table class="table_form_register">')); 
    $this->table->add_row(form_label($label_email.
                                    form_label(form_error('email'),'',array('class' => 'error_label')), 
                                    'label_email',
                                     array('class' => 'form_label')), 

                           array('class' => 'align_right_td', 
                                 'data' => form_input('email', 
                                           set_value('email'),
                                           'class = "align_right_input require"')));  

    $this->table->add_row(form_label($label_invitation_key.
                                    form_label(form_error('invitation_key'),'',array('class' => 'error_label')),
                                    'label_invitation_key',
                                     array('class' => 'form_label')),

                          array('class' => 'align_right_td',  
                                 'data' => form_password('invitation_key',
                                           set_value('invitation_key'),
                                           'class = "align_right_input require"')));

    $this->table->add_row('',array('class' => 'button_td',
                  'data' => form_submit('register',  $button_register, 'class = "form_td_button"')));

    echo $this->table->generate();    
/**
 * No need to open and close php tags over and over. just open them at the beginning, then close them at the end.  
 * The indentation is not used consistently
 * Using the {} to put code in blocks would make this code cleaner
 * Appears to be using lots of arrays. I'm sure there's a better way of coding this'
 */
    ?>          
<?php echo form_close();?>   