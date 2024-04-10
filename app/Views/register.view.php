<?php require_once "../app/Views/Components/head.php"; ?>
<?php require_once "../app/Views/Components/navbar.php"; ?>

<div class="container mx-auto mt-8">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold">Register</h1>
    </div>
    <?php
    // Display registration success or error message
    if (isset($message)) {
        echo "<p class='text-green-500'>$message</p>";
    } elseif (isset($error)) {
        echo "<p class='text-red-500'>$error</p>";
    }
    ?>
    <form class="max-w-md mx-auto" method="post" action="<?= htmlspecialchars("/register"); ?>">
        <div class="mb-4">
            <label for="username" class="block text-sm font-semibold mb-2">Username:</label>
            <input type="text" id="username" name="username" required class="w-full px-4 py-2 border border-black rounded-md focus:outline-none focus:border-blue-500">
            <!-- Added border class -->
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold mb-2">Email:</label>
            <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-black rounded-md focus:outline-none focus:border-blue-500">
            <!-- Added border class -->
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-semibold mb-2">Password:</label>
            <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-black rounded-md focus:outline-none focus:border-blue-500">
            <!-- Added border class -->
        </div>

        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">Register</button>
    </form>
</div>

<?php require_once "../app/Views/Components/footer.php"; ?>
