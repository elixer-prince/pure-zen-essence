const NavbarLinks = ({
  sections,
}: {
  sections: { id: string; name: string }[];
}) => {
  return (
    <ul className="hidden items-center overflow-hidden rounded-md border-3 border-white font-bold lg:flex">
      {sections.map(({ id, name }) => (
        <li key={id}>
          <a
            href={id}
            className="transition-[padding, color] hover:text-brand-green active:text-brand-darkblue block to-white/15 px-4 py-2 duration-250 hover:bg-linear-to-r hover:from-white/10 hover:px-6 hover:py-3 active:bg-white/50 active:font-black"
          >
            {name}
          </a>
        </li>
      ))}
    </ul>
  );
};

export default NavbarLinks;
