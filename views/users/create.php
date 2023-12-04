<?php include __DIR__ . '/../partials/header.php' ?>
<div class="container">
    <form action="/admin/users/store" method="POST">
        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input class="input" type="email" placeholder="Email" id="email" name="email" required>
            </div>
        </div>
        <div class="field">
            <label class="label" for="password">Password</label>
            <div class="control">
                <input class="input" type="password" placeholder="Password" id="password" name="password" required>
            </div>
        </div>
        <div class="field">
            <input type="submit" value="Create" class="button is-primary">
        </div>
    </form>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?>