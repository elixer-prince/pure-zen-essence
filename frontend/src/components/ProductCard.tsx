import PlaceholderImage from "../assets/landscape-placeholder.svg";

type ProductProps = { image?: string; title: string; description: string };

const ProductCard = ({
  image = PlaceholderImage,
  title = "Product Title",
  description = "Product description goes here...",
}: ProductProps) => {
  return (
    <article className="card-container bg-amber-300">
      <div className="card">
        <div className="card-front flex flex-col">
          <a
            className="block flex-1/2 border-2 border-amber-400 bg-green-500 object-cover"
            href={image}
          >
            <img className="h-full w-full object-cover" src={image} alt="" />
          </a>
          <div className="flex-1/2">
            <h3 className="text-center text-2xl font-bold">{title}</h3>
            <p className="text-center text-sm">{description}</p>
          </div>
        </div>
        <div className="card-back"></div>
      </div>
    </article>
  );
};

export default ProductCard;
