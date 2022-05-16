
<div class="comment-outer">


<!-- <h4>vengo del archivo comment</h4> -->


<?php $args_comments = array (
    'title_reply' => 'pahjuo',
    'max_depth'  => '2',
    'reply_text' => 'Responder este comentario ',
    'avatar_size' => 35,
    'per_page' => ''
);?>




<?php $args_comment = array (
    'label_submit'  => __('Enviar comentario')
);?>

<?php wp_list_comments($args_comments);?>
<?php comment_form($args_comment);?>


</div>