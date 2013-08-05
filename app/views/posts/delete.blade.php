<div id="delete_post" class="modal hide fade">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Are you sure?</h3>
    </div>
    <div class="modal-body">
        <p>Are you sure you want to delete this post?</p>
    </div>
    <div class="modal-footer">
        <a class="btn btn-success" href="{{ URL::route('blog.posts.destroy', array('posts' => $post->getId())) }}" data-token="{{ Session::getToken() }}" data-method="DELETE">Yes</a>
        <button class="btn btn-danger" data-dismiss="modal">No</button>
    </div>
</div>
