<div class="container">
    <div class="row">
        <div class="column">

            <h1>CREATE page</h1>

            <hr>

            <form action="/posts" method="post">
            
                @csrf

                <label for="body">Title</label>
                <input type="text" name="title" required>

                <label for="body">Post</label>
                <textarea name="body" id="" cols="30" rows="10" required></textarea>
                
            
                <button type="submit">Submit</button>
                
            </form>

            @include('partials.errors')

        </div>
    </div>
</div>

