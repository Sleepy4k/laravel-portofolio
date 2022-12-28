import PortofolioLayout from "@/Layouts/PortofolioLayout";
import { Head } from "@inertiajs/inertia-react";
import Jumbotron from "@/Components/Portofolio/Jumbotron";
import About from "@/Components/Portofolio/About";
import Projects from "@/Components/Portofolio/Projects";
import Contact from "@/Components/Portofolio/Contact";

export default function Portofolio(props) {
    return (
        <PortofolioLayout owner={props.owner}>
            {/* <Head title={props.owner.name} /> */}
            <Jumbotron owner={props.owner} />
            <About owner={props.owner} />
            <Projects owner={props.owner} />
            <Contact />
        </PortofolioLayout>
    );
}
