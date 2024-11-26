<link rel="stylesheet" href={{asset('css/favorite.css')}}>

<div class="fav">
    <div class="second-container">
        <div class="favorite">
            <p>Favorite Categories</p>
            <div class="favorite-items">
                @foreach (App\Models\ProductCategories::inRandomOrder()->limit(4)->get() as  $category)
                    <div class="foreach-favorite">
                        <img src="">
                        <br>
                        <p>{{$category->name}}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bill-container">
            <p>Top Up & Bills</p>
            <form action="" class="bill-form">
                <label>Subscription Number</label>
                <br>
                <input type="number" id="telp">
                <br>
                <label>Nominal</label>
                <br>
                <input type="number" id="nominal">
                <br>
                <button type="submit">Pay</button>
            </form>
        </div>
    </div>
</div>

<script src={{asset('js/favorite.js')}} defer></script>
