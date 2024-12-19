/**
 * Init
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 */

const pageId = document.body.id;
let url = './assets/products/data.csv';

// #で表示商品を切り替え
if (pageId != 'lpTop') {
  url = '../assets/products/data.csv';
  window.addEventListener('hashchange', () => location.reload());
}

// Vue
const data = {
  data() {
    return { products: {}, product: {} }
  },
  mounted() {
    axios.get(url).then((res) => {
      // CSVを配列内オブジェクトとして格納
      const products = [];
      const texts = res.data.split('\n');
      const props = texts.shift().split(',');
      texts.forEach((text, i) => {
        products[i] = {};
        products[i]['slide'] = [];
        const values = text.split(',');
        for (let j = 1; j < props.length; j++) {
          if (props[j].slice(0, 5) == 'slide') {
            if (values[j] == '○' || values[j] == '〇') products[i]['slide'].push(true);
            else products[i]['slide'].push(false);
          }
          products[i][props[j]] = values[j];
        }
      });

      // 金額表記等データ成形
      products.forEach((product, i) => {
        product.title = `${product.manufacturer} | ${product.model}`;
        if (product.price - 0 && !isNaN(product.price) && 
          product.salePrice - 0 && !isNaN(product.salePrice)) {
          product.discount = Math.round((1 - product.salePrice / product.price) * 100);
          product.price = `${(product.price - 0).toLocaleString()}円`;
        } else {
          product.discount = '?';
          product.price = 'オープン価格';
        }
        product.totalPrice = (product.salePrice - 0);
        const str = (product.totalPrice + '')
        product.totalPrice1 = str.slice(0, -4);
        product.totalPrice2 = `.${str.substring(str.length - 4, str.length - 2)}`;
        product.totalPrice = (product.totalPrice - 0).toLocaleString();
        product.salePrice = (product.salePrice - 0).toLocaleString();
      });

      // カテゴリー分け
      if (pageId == 'lpTop') {
        products.cat1 = []
        products.cat2 = [];
        products.forEach((product) => {
          if (product.category != 1) products.cat1.push(product);
          else products.cat2.push(product);
        });
      }

      // トップ/サブで出力切り替え
      if (pageId == 'lpTop') {
        this.products = products;
      } else {
        const id = location.hash.slice(1);
        if (id && !isNaN(id) && id <= products.length) {
          this.product = products[id - 1];
        } else {
          location.hash = 1;
        }
      }
    });
  }
}

if (pageId == 'lpTop') {
  Vue.createApp(data).mount('#products');
} else {
  Vue.createApp(data).mount('#product');
}

// Drawer Menu
import DrawerMenu from './_drawerMenu.js';
new DrawerMenu();

// Evil Icons
import EvilIcons from './_evilIcons.js';
new EvilIcons();

// Slider
import Slider from './_slider.js';
setTimeout(() => {
  new Slider();
}, 1000);
