export default function Footer({ owner }) {
    return (
        <footer className="copyright pb-1">
            <p>
                {transData("footer.copyright")}{" "}
                <a
                    href="https://github.com/sleepy4k"
                    className="copyright-link"
                >
                    {owner.name}
                </a>{" "}
                &copy; {new Date().getFullYear()}
            </p>
        </footer>
    );
}
