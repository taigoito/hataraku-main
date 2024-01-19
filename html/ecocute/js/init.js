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
        const values = text.split(',');
        for (let j = 1; j < props.length; j++) {
          if (values[j] == '◎') values[j] = '../assets/images/value_best.png';
          if (values[j] == '○' || values[j] == '〇') values[j] = '../assets/images/value_better.png';
          if (values[j] == '-') values[j] = '../assets/images/value_none.png';
          if (props[j].slice(0, 4) == 'note') values[j] = values[j].replace(/\s+/g,'<br>');
          products[i][props[j]] = values[j];
        }
      });

      // 金額表記等データ成形
      products.forEach((product, i) => {
        product.title = `${product.manufacturer} ${product.model}`;
        product.rank = product.labelMain == 'パワフル' ? 2 : product.labelMain == 'ベーシック' ? 1 : 0;
        if (product.price - 0 && !isNaN(product.price) && 
          product.salePrice - 0 && !isNaN(product.salePrice)) {
          product.discount = Math.round((1 - product.salePrice / product.price) * 100);
        } else {
          product.discount = '?';
        }
        product.totalPrice = (product.salePrice - 0) + (product.commission - 0);
        const str = (product.totalPrice + '')
        product.totalPrice1 = str.slice(0, -4);
        product.totalPrice2 = `.${str.substring(str.length - 4, str.length - 2)}`;
        product.totalPriceWithTax = (product.totalPrice * 1.1).toLocaleString();
        product.salePrice = (product.salePrice - 0).toLocaleString();
        product.commission = (product.commission - 0).toLocaleString();
      });

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
new Slider();
