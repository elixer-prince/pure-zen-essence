import ProductCard from "./ProductCard";

const ProductSection = () => {
  return (
    <section
      id="products"
      aria-labelledby="products-header"
      className="grid scroll-mt-20 gap-4 p-4"
    >
      <header>
        <h2
          id="products-header"
          className="text-center text-3xl font-extrabold"
        >
          OUR PRODUCTS
        </h2>
      </header>
      <div className="grid grid-cols-1 gap-4 bg-red-500">
        <ProductCard title="Coconut Oil" description="" />
        <ProductCard title="Coconut Oil" description="" />
        <ProductCard title="Coconut Oil" description="" />
        <ProductCard title="Beard Oil" description="" />
      </div>
    </section>
  );
};

export default ProductSection;
