<?php include __DIR__ . '/../partials/header.php' ?>
<div class="container">
    <form action="/admin/users/update?id=<?=$user->id?>" method="POST">
        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input class="input" type="email" placeholder="Email" id="email" name="email" value="<?=$user->email?>" required>
            </div>
        </div>
        <div class="field">
            <label class="label" for="password">New Password (leave blank to keep current password)</label>
            <div class="control">
                <input class="input" type="password" placeholder="Password" id="password" name="password">
            </div>
        </div>
        <div class="field">
            <input type="submit" value="Update" class="button is-primary">
        </div>
    </form>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?>