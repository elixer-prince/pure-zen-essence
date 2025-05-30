import { FaInstagram, FaTiktok } from "react-icons/fa";

const Footer = () => {
  return (
    <footer className="bg-black px-4 py-16 text-center text-white sm:px-8">
      <ul className="flex items-center justify-center gap-8 sm:gap-8">
        <li>
          <a
            href="https://www.instagram.com/purezenessence/"
            target="_blank"
            rel="noopener noreferrer"
          >
            <FaInstagram className="hover:text-brand-green text-4xl transition-colors duration-300 sm:text-5xl" />
          </a>
        </li>
        <li>
          <a
            href="https://www.tiktok.com/@purezenessence"
            target="_blank"
            rel="noopener noreferrer"
          >
            <FaTiktok className="hover:text-brand-green text-4xl transition-colors duration-300 sm:text-5xl" />
          </a>
        </li>
      </ul>
      <p className="mt-8 sm:text-2xl lg:text-2xl">
        Copyright &copy; 2025 Pure Zen Essence
      </p>
    </footer>
  );
};

export default Footer;
