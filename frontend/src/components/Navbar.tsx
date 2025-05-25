import { FaBars } from "react-icons/fa6";
import PlaceholderImage from "../assets/landscape-placeholder.svg";

const Navbar = () => {
  const sections: { id: string; name: string }[] = [
    { id: "#about", name: "About Us" },
    { id: "#products", name: "Our Products" },
    { id: "#testimonials", name: "Testimonials" },
    { id: "#faqs", name: "FAQs" },
  ];

  return (
    <nav className="flex items-center justify-between border-2 border-amber-400 p-4">
      <a className="flex items-center gap-2" href="/">
        <img
          className="w-16 border-2 border-amber-400"
          src={PlaceholderImage}
          alt="Pure Zen Essence Logo"
        />
        <span className="mt-4 text-2xl font-extrabold">Pure Zen Essence</span>
      </a>
      <ul className="hidden border-2 border-amber-600">
        {sections.map(({ id, name }) => (
          <li key={id}>
            <a href={id} className="block border-2 border-blue-600">
              {name}
            </a>
          </li>
        ))}
      </ul>
      <div className="mt-4 cursor-pointer text-2xl">
        <FaBars />
      </div>
    </nav>
  );
};

export default Navbar;
