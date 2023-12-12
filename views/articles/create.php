<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">
    <h1 class="is-size-1">New Article</h1>

    <form action="/admin/articles" method="POST" enctype="multipart/form-data">
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input class="input" type="text" placeholder="Title" name="title" id="title">
            </div>
        </div>
        <div class="field">
            <label class="label" for="body">Content</label>
            <div class="control">
                <textarea class="textarea" placeholder="Content..." name="body" id="body"></textarea>
            </div>
        </div>

        <label class="checkbox"><input type="checkbox" name="vegan" id="vegan"> Vegan</label><br><br>
        <label class="checkbox"><input type="checkbox" name="vegetarian" id="vegetarian"> Vegetarian</label><br><br>
        <label class="checkbox"><input type="checkbox" name="gluten" id="gluten"> Gluten free</label><br><br>

        <div class="select is-primary" name="spice" id="spice">
            <select>
                <option>🌶️ Spicy</option>
                <option>🌶️🌶️ Spicy</option>
                <option>🌶️🌶️🌶️ Spicy</option>
                <option>🌶️🌶️🌶️🌶️ Spicy</option>
                <option>🌶️🌶️🌶️🌶️🌶️ Spicy</option>
            </select>
        </div>
        <br><br>


        <div class="field has-addons">
            <p class="control">
                <span class="select">
                    <select>
                        <option>$</option>
                        <option>£</option>
                        <option>€</option>
                    </select>
                </span>
            </p>
            <p class="control">
                <input class="input" type="text" placeholder="Hind">
            </p>
            <p class="control">
                <a class="button is-primary">
                    Hind
                </a>
            </p>
        </div>
        <div class="field">
            <label class="label" for="image">Image</label>
            <div class="control">
                <input class="input" type="file" name="image" id="image">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="button is-primary" type="submit" value="Submit">
            </div>
        </div>
    </form>






</div>
<?php include __DIR__ .  '/../partials/footer.php'; ?>