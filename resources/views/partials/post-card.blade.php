<div class="post-card card">
    <a 
        href="/{{ $post->slug }}" 
        class="img-container"
        style="background-image:url('{{ $post->image }}')">
    </a>

    <div class="card-content">
        <h2>
            <a href="/{{ $post->slug }}"> {{ $post->title }} </a>
            <div class="byline">
                {{ $post->author->name }}
            </div>

            <p>
                {{ $post->getExcerpt() }}
            </p>

            <span class="price {{ $post->premium ? 'price-premium' : 'price-free' }}">
                {{ $post->premium ? 'Premium' : 'Free' }}
            </span>
        </h2>
    </div>

</div>