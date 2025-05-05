<button id="like-btn" class="rounded-md mt-2 bg-gradient-to-tr from-slate-800 to-slate-700 p-2.5 border border-transparent text-center text-sm text-white transition-all shadow-sm hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
    <svg id="like-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="{{ isset($has_liked) && $has_liked ? 'red' : 'currentColor'}}" class="w-4 h-4">
      <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
    </svg>
</button>

<p id="like-count">Like count: {{ $likes_count}}</p>

<script>
    const likeBtn = document.getElementById('like-btn');
    const likeSvg = document.getElementById('like-svg');
    const likeCount = document.getElementById('like-count');

    function setLikedState(isLiked) {

        if (isLiked) {
            likeSvg.classList.add('liked');
        } else {
            likeSvg.classList.remove('liked');
        }
    }

    likeBtn.addEventListener('click', function() {
        fetch('/like', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            likeCount.textContent = 'Like count: ' + data.total_likes;
            setLikedState(data.has_liked);
        });
    });

    // Set the initial state if you pass has_liked from the backend
    setLikedState({{ isset($has_liked) && $has_liked ? 'true' : 'false' }});
</script>
