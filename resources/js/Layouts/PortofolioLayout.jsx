import Header from "@/Components/Portofolio/Header";
import Footer from "@/Components/Portofolio/Footer";

export default function Portofolio({ owner, application, children }) {
    return (
        <>
            <Header application={application} />
            {children}
            <Footer owner={owner} />
        </>
    );
}
