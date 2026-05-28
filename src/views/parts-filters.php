<form class="filters" method="GET">

    <input
        type="text"
        name="category"
        placeholder="Категория"
        value="<?= e($_GET['category'] ?? '') ?>"
    >

    <input
        type="text"
        name="manufacturer"
        placeholder="Произоводитель"
        value="<?= e($_GET['manufacturer'] ?? '') ?>"
    >

    <input
        type="number"
        name="min_price"
        placeholder="Минимальная цена"
        value="<?= e($_GET['min_price'] ?? '') ?>"
    >

    <input
        type="number"
        name="max_price"
        placeholder="Максимальная цена"
        value="<?= e($_GET['max_price'] ?? '') ?>"
    >

    <button type="submit">Применить</button>

</form>