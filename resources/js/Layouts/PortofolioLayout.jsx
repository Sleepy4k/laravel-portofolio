import Header from "@/Components/Portofolio/Header";
import Footer from "@/Components/Portofolio/Footer";

export default function Portofolio({ owner, children }) {
    return (
        <>
            <Header owner={owner} />
            {children}
            <Footer owner={owner} />
        </>
    );
}
