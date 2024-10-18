<nav>
    <ul>
        <li><a href="/" class="<?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : '' ?>">Home</a></li>
        <li><a href="/about" class="<?= $_SERVER['REQUEST_URI'] === '/about' ? 'active' : '' ?>">About</a></li>
        <li><a href="/produit/nouveau" class="<?= $_SERVER['REQUEST_URI'] === '/product/nouveau' ? 'active' : '' ?>">Add product</a></li>
        <li><a href="/produit/liste" class="<?= $_SERVER['REQUEST_URI'] === '/product/liste' ? 'active' : '' ?>">All products</a></li>
        <li><a href="/inscription" class="<?= $_SERVER['REQUEST_URI'] === '/inscription' ? 'active' : '' ?>">Register</a></li>
    </ul>
</nav>
