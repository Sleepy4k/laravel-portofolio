import { Link } from "@inertiajs/inertia-react";

export default function Paginator({ meta }) {
    const prev = meta.links[0].url;
    const next = meta.links[meta.links.length - 1].url;
    const start = meta.links[1];
    const end = meta.links[meta.links.length - 2];
    const current = meta.current_page;

    return (
        <>
            {meta.links.length > 3 && (
                <ul className="pagination">
                    {prev && (
                        <>
                            <li className="page-item">
                                <Link
                                    className="page-link"
                                    href={prev}
                                    aria-label="Previous"
                                >
                                    <span aria-hidden="true">&laquo;</span>
                                </Link>
                            </li>
                            <li className="page-item">
                                <Link className="page-link" href={start.url}>
                                    {start.label}
                                </Link>
                            </li>
                        </>
                    )}
                    <li className="page-item">
                        <Link className="page-link" href="#">
                            {current}
                        </Link>
                    </li>
                    {next && (
                        <>
                            <li className="page-item">
                                <Link className="page-link" href={end.url}>
                                    {end.label}
                                </Link>
                            </li>
                            <li className="page-item">
                                <Link
                                    className="page-link"
                                    href={next}
                                    aria-label="Next"
                                >
                                    <span aria-hidden="true">&raquo;</span>
                                </Link>
                            </li>
                        </>
                    )}
                </ul>
            )}
        </>
    );
}
