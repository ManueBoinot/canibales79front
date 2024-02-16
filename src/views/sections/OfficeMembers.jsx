const OfficeMembers = ({ bureaumembres }) => {
  return (
    <div className="row">
      {bureaumembres.map((bureaumembre) => (
        <div key={bureaumembre.id} className="col-auto mb-2">
          <img
            src={`./storage/app/public/${bureaumembre.image}`}
            alt={`${bureaumembre.prenom} ${bureaumembre.statut} du club`}
            className="illu-bureau"
          />
          <p className="m-0">{bureaumembre.prenom}</p>
          <small className="font-bold">{bureaumembre.statut}</small>
        </div>
      ))}
    </div>
  );
};

export default OfficeMembers;
