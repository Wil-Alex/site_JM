
<div class="comment-outer">


<h4>vengo del archivo comment</h4>
<?php $args_comments = array (
    'max_depth'  => '4',
    'reply_text' => 'responder a este comentariso',
    'avatar_size' => 40,
    'per_page' => ''
);?>




<?php $args_comment = array (
    'label_submit'  => __('enviar coemntario')
);?>

<?php wp_list_comments($args_comments);?>
<?php comment_form($args_comment);?>


</div>