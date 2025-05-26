import PlaceholderImage from "../assets/landscape-placeholder.svg";

type ProductProps = {
  imageUrl?: string;
  title: string;
  description?: string;
  category?: string;
  sizes?: {
    name: string;
    price: number;
  }[];
};

const ProductCard = ({
  imageUrl = PlaceholderImage,
  title = "Product Title",
  description = "Product description goes here...",
  category = "Unnamed Category",
  sizes = [{ name: "xx", price: 0 }],
}: ProductProps) => {
  return (
    // Card Container
    <article>
      {/* Card */}
      <div>
        {/* Card Front */}
        <div className="flex flex-col border-2">
          <a className="h-52 overflow-hidden" href={imageUrl}>
            <img
              className="h-full w-full object-cover transition-transform duration-500 hover:scale-110"
              src={imageUrl}
              alt=""
            />
          </a>
          <div className="h-56 border-2 border-amber-500 p-4 text-center">
            <h3 className="text-2xl font-bold">{title}</h3>
            <p className="text-sm">{description}</p>
          </div>
        </div>
        {/* Card Back */}
        <div className="card-back"></div>
      </div>
    </article>
  );
};

export default ProductCard;
