Hi {{ $post->user->name }},

You've got a new comment on your <a href="posts/{{url('posts/'.$post->id) }}">{{$post->title}}</a> post.

Comment content:

<p>
    {{ $post->comments->last() }}
</p>