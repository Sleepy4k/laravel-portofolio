// Import Core Libraries
import { Link } from "@inertiajs/inertia-react";

export default function DataTable({ translate }) {
    return (
        <div className="card-body">
            <div className="table-responsive">
                <Link
                    href={route("translate.create")}
                    as="button"
                    className="btn btn-success mb-3"
                >
                    {transData("page.translate.add")}
                </Link>
                <table className="table align-items-center">
                    <thead>
                        <tr className="text-center">
                            <th>{transData("table.translate.index")}</th>
                            <th>{transData("table.translate.group")}</th>
                            <th>{transData("table.translate.key")}</th>
                            <th>{transData("table.translate.id")}</th>
                            <th>{transData("table.translate.en")}</th>
                            <th>{transData("table.translate.action")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {translate && translate.length > 0 ? (
                            translate.map((data, index) => {
                                return (
                                    <tr key={index} className="text-center">
                                        <td>{data.id}</td>
                                        <td>{data.group}</td>
                                        <td>{data.key}</td>
                                        <td>{data.text.id}</td>
                                        <td>{data.text.en}</td>
                                        <td>
                                            <Link
                                                href={route(
                                                    "translate.edit",
                                                    data.id
                                                )}
                                                as="button"
                                            >
                                                {transData(
                                                    "table.translate.edit"
                                                )}
                                            </Link>
                                            <span> | </span>
                                            <Link
                                                href={route(
                                                    "translate.destroy",
                                                    data.id
                                                )}
                                                method="delete"
                                                as="button"
                                                onClick={(e) => {
                                                    if (
                                                        confirm(
                                                            "Apakah kamu yakin mau menghapus data ini? \n\nData akan terhapus secara permanen"
                                                        ) == true
                                                    ) {
                                                        removeTransData(
                                                            data.group +
                                                                "." +
                                                                data.key
                                                        );
                                                        return;
                                                    } else {
                                                        e.preventDefault();
                                                    }
                                                }}
                                            >
                                                {transData(
                                                    "table.translate.delete"
                                                )}
                                            </Link>
                                        </td>
                                    </tr>
                                );
                            })
                        ) : (
                            <tr>
                                <td colSpan="5" className="text-center">
                                    {transData("table.translate.empty")}
                                </td>
                            </tr>
                        )}
                    </tbody>
                </table>
            </div>
        </div>
    );
}
