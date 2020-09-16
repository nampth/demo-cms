<template>
    <div class="product-item">
        <div class="pi-img-wrapper">
            <img :src="product.img" class="img-responsive"
                 alt="Berry Lace Dress">
            <div>
                <a :href="product.img"
                   class="btn btn-default fancybox-button">Phóng to</a>
                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">Xem</a>
            </div>
        </div>
        <h3><a href="shop-item.html">{{ product.name }}</a></h3>
        <div class="pi-price">$29.00</div>
        <a href="javascript:;" class="btn btn-default add2cart">Thêm vào giỏ hàng</a>
        <div class="sticker sticker-sale"></div>
    </div>
</template>

<script>
    export default {
        name: "product-single",
        props:{
            product: {
                type: Object,
                default: {}
            }
        }
    }
</script>

<style scoped>

</style>