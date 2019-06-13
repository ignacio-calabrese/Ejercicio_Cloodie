<?php
        require_once ("../model/Chat_model.php");
        $Chat_model = new Chat_model();
        $chat = $Chat_model->getChat();
        
        for ($i = 0; $i < count($chat); $i++) { ?>
            <div id="chat-data">
                <span class="data-username"><?php echo $chat[$i]->user_name; ?></span>
                <span class="data-content"><?php echo $chat[$i]->message; ?></span>
                <span class="data-date"><?php echo date('g:i:s a', strtotime($chat[$i]->date)); ?></span>
            </div>            
        <?php  } ?> 