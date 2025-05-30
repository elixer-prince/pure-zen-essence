import { FaInstagram, FaTiktok } from 'react-icons/fa';

const Footer = () => {
  return (
    <footer className="bg-black px-4 sm:px-8 py-8 sm:py-16 text-center text-white">
      <ul className="flex flex-col sm:flex-row justify-center items-center gap-4 sm:gap-8">
        <li className="w-full sm:w-auto">
          <a 
            href="https://www.instagram.com" 
            target="_blank" 
            rel="noopener noreferrer"
          >
            <FaInstagram className="text-4xl hover:text-brand-green transition-colors duration-300" />
          </a>
        </li>
        <li className="w-full sm:w-auto">
          <a 
            href="https://www.tiktok.com"
            target="_blank" 
            rel="noopener noreferrer"
          >
            <FaTiktok className="text-4xl hover:text-brand-green transition-colors duration-300" />
          </a>
        </li>
      </ul>
      <p className="mt-4 sm:mt-8 sm:text-sm md:text-md lg:text-lg">Copyright &copy; 2025 Pure Zen Essence</p>
    </footer>
  );
};

export default Footer;
