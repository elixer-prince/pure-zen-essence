const NavbarLinks = () => {
  const sections = [
    { id: "#", name: "HOME" },
    { id: "#about", name: "ABOUT US" },
    { id: "#products", name: "OUR PRODUCTS" },
    { id: "#testimonials", name: "TESTIMONIALS" },
    { id: "#faqs", name: "FAQS" },
  ];

  return (
    <ul className="hidden items-center overflow-hidden rounded-md border-2 border-white font-bold lg:flex">
      {sections.map(({ id, name }) => (
        <li key={id}>
          <a
            href={id}
            className="transition-[padding, color] hover:text-brand-green block to-white/15 px-4 py-2 duration-250 hover:bg-linear-to-r hover:from-white/10 hover:px-6 hover:py-3"
          >
            {name}
          </a>
        </li>
      ))}
    </ul>
  );
};

export default NavbarLinks;
